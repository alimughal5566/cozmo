<?php



namespace App\Http\Controllers;



use App\Article;

use App\ArticleCategory;
use App\Category;

use App\Writer;
use App\ArticleComment;

use Illuminate\Http\Request;

use Auth;

use App\User;

use App\MC;

use Illuminate\Support\Facades\Validator;
use DB;


class ArticleManagement extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $articles = Article::with(['categories.category','writer'])->where('soft_delete',0)->get();
        $articles->map(function ($article) {
            $article->photo = @$article->photo;
        });
        //dd($articles);

        return view('admin.am.index',compact('articles'));

    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $categories = Category::all();

        $writers = Writer::where('soft_delete',0)->get();

        return view('admin.am.create',compact('writers','categories'));

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {
        $messages = [
            'title.required' => 'The Title Field is Required.',
            'long_title.required' => 'The Long Title Field is Required.',
            'writer_id.required' => 'The Writer Field is Required.',
            'categories_id.required' => 'The Category Field is Required.',
            'article_type.required' => 'You must choose Member type.',
            'description.required'=>"You must Enter Description in the below box.",
        ];
        $validator = Validator::make( $request->all(), [

            'title' => 'required',

            'long_title' => 'required',

            'categories_id'=> 'required',

            'writer_id'=>'required',
            'description'=>'required',

            'article_type'=>'required',

        ],$messages);

        if ( $validator->fails() ) {

            return redirect()->back()

                ->withErrors($validator)

                ->withInput();

        }

        $inputs = $request->all();
        if (isset($request->id)) {
            $article = Article::where('id',$request->id)->first(); 
            if ($request->hasFile('image')) {

                \File::delete('uploads/articles/'.$article->image);
                $inputs['image'] = $this->uploadFile($request);
            }

            $update = $article->update($inputs);

            ArticleCategory::where('article_id',$request->id)->delete();
            foreach ($request->categories_id as $category_id) {
                ArticleCategory::create([
                    'article_id' => $request->id,
                    'category_id' => $category_id
                ]);
            }

            if ($update) {

                return redirect('article')->with('success', trans('Article has been successfully updated'));

            }

        } else {
            if ($request->hasFile('image')) {
                $inputs['image'] = $this->uploadFile($request);
            }
            // $article= DB::table('articles')->insertGetId(
            //     [
            //         'title' => $inputs['title'],
            //         'long_title'=>$inputs['long_title'],
            //         'description'=>$inputs['description'],
            //         'article_type'=>$inputs['choose_member'],
            //         'image' => $inputs['image'],
            //         'writer_id'=>$inputs['writer_id']
            //     ]
            //     );
                // $article->id=$article->lastInsertId();     
            $article = Article::create($inputs);
            // dd($article);    
            foreach ($request->categories_id as $category_id) {
                ArticleCategory::create([
                    'article_id' => $article->id,
                    'category_id' => $category_id
                ]);
            }

            if ($article) {

                return redirect('article')->with('success', trans('Article has been successfully created'));

            }
        }

        return redirect()->back()->with('alert',trans('writers.something_wrong'));

    }

    private function uploadFile($request) {

        $file = $request->file('image');

        $name = time().'_'.$file->getClientOriginalName();

        $extension = $file->getClientOriginalExtension();

        $file->move('uploads/articles',$name);

        return $name;
    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        //

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $article = Article::with(['categories.category','writer'])->find($id);
        $article->photo = @$article->photo;

        $categories = Category::all();

        $writers = Writer::where('soft_delete',0)->get();

        return view('admin.am.create',compact('writers','categories','article'));

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)

    {

        //

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        $delete = Article::where('id',$id)->update(['soft_delete'=>1]);

        if ($delete){

            echo trans('writers.delete_msg'); exit;

        } else {

            echo trans('writers.something_wrong'); exit;

        }

    }

    public function articleComments(Request $request) {

        $articles = Article::all();
        if (is_null($request->article_id)) {
            $comments = ArticleComment::all();
        } else {

            $comments = ArticleComment::where('article_id',$request->article_id)->get();
        }

        return view('admin.am.article_comments',compact('comments','articles'));
    }

    public function articleCommentsDelete($id) {

        $delete = ArticleComment::where('id',$id)->delete();

        if ($delete){

            echo "Comment has been deleted successfully"; exit;

        } else {

            echo "something went wrong, please try again"; exit;

        }
    }

}

