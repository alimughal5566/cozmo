<!DOCTYPE html>
<html>
<head>
	<title>Mailing List</title>
</head>
<body>
  
@extends('layouts.app')
@section('content')

  <section class="list_section">

    <div class="container">


      <form class="search_box active" id="search_box" action="#" method="post" novalidate="novalidate">
          <div class="row">
            <div class="col-lg-12 main-serch-cl list_search_box">
              <div class="row">
                
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                  
                  <select style="height: 50px;" class="form-control search-slt" id="exampleFormControlSelect1">
                    <option>Categories </option>
                    <option>Example one</option>
                    <option>Example one</option>
                    <option>Example one</option>
                    <option>Example one</option>
                    <option>Example one</option>
                    <option>Example one</option>
                  </select>
                </div>
                
                <div class="col-lg-3 col-md-7 col-sm-7 p-0 ">
                  <input style="height: 50px;" class="form-control serch-box" placeholder="Start Date" type="text" onfocus="(this.type = 'date')"  id="date">

                </div>
                <div class="col-lg-3 col-md-7 col-sm-7 p-0 ">
                  <input style="height: 50px;" class="form-control serch-box" placeholder="End Date" type="text" onfocus="(this.type = 'date')"  id="date">
                </div>
                <div class="col-lg-3 col-md-2 col-sm-2 p-0 main-serch">
                  <button style="height: 50px;" class="serch-btn" type="submit"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
        </form>


      <div class="row add_border">
        <div class="col-md-2">
          <div class="date_section">
            <h2>01</h2><span>AUGUST</span>
            <p>SATURDAY</p>
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail_section">
            <a href="javascript:void(0)">Lorem Ipsum Lorem Ipsum Lorem Ipsum </a>
            <span><i class="fa fa-clock-o mr-2"></i>Local time: Aug 01 2020 | 4:00 am - 2:00 pm</span>
            <p class="city">City Town | Manhattan, New York, NY, USA</p> 
            <p class="time">8:00 am - 6:00 pm</p>
          </div>
        </div>
        <div class="col-md-3 text-right">
          <div class="right_buttons">
            <button type="button">Register</button>
          </div>
        </div>
      </div>
      <div class="row add_border">
        <div class="col-md-2">
          <div class="date_section">
            <h2>08</h2><span>AUGUST</span>
            <p>SATURDAY</p>
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail_section">
            <a href="javascript:void(0)">Lorem Ipsum Lorem Ipsum Lorem Ipsum </a>
            <span><i class="fa fa-clock-o mr-2"></i>Local time: Aug 01 2020 | 4:00 am - 2:00 pm</span>
            <p class="city">City Town | Manhattan, New York, NY, USA</p> 
            <p class="time">8:00 am - 6:00 pm</p>
          </div>
        </div>
        <div class="col-md-3 text-right">
          <div class="right_buttons">
            <button type="button">Register</button>
          </div>
        </div>
      </div>
      <div class="row add_border">
        <div class="col-md-2">
          <div class="date_section">
            <h2>02</h2><span>AUGUST</span>
            <p>SATURDAY</p>
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail_section">
            <a href="javascript:void(0)">Lorem Ipsum Lorem Ipsum Lorem Ipsum </a>
            <span><i class="fa fa-clock-o mr-2"></i>Local time: Aug 01 2020 | 4:00 am - 2:00 pm</span>
            <p class="city">City Town | Manhattan, New York, NY, USA</p> 
            <p class="time">8:00 am - 6:00 pm</p>
          </div>
        </div>
        <div class="col-md-3 text-right">
          <div class="right_buttons">
            <button type="button">Register</button>
          </div>
        </div>
      </div>
      <div class="row add_border">
        <div class="col-md-2">
          <div class="date_section">
            <h2>04</h2><span>AUGUST</span>
            <p>SATURDAY</p>
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail_section">
            <a href="javascript:void(0)">Lorem Ipsum Lorem Ipsum Lorem Ipsum </a>
            <span><i class="fa fa-clock-o mr-2"></i>Local time: Aug 01 2020 | 4:00 am - 2:00 pm</span>
            <p class="city">City Town | Manhattan, New York, NY, USA</p> 
            <p class="time">8:00 am - 6:00 pm</p>
          </div>
        </div>
        <div class="col-md-3 text-right">
          <div class="right_buttons">
            <button type="button">Register</button>
          </div>
        </div>
      </div>
      <div class="row add_border">
        <div class="col-md-2">
          <div class="date_section">
            <h2>07</h2><span>AUGUST</span>
            <p>SATURDAY</p>
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail_section">
            <a href="javascript:void(0)">Lorem Ipsum Lorem Ipsum Lorem Ipsum </a>
            <span><i class="fa fa-clock-o mr-2"></i>Local time: Aug 01 2020 | 4:00 am - 2:00 pm</span>
            <p class="city">City Town | Manhattan, New York, NY, USA</p> 
            <p class="time">8:00 am - 6:00 pm</p>
          </div>
        </div>
        <div class="col-md-3 text-right">
          <div class="right_buttons">
            <button type="button">Register</button>
          </div>
        </div>
      </div>
      <div class="show_more text-center">
        <button type="button">Load More</button>
      </div>
    </div>
  </section> 
  
    <script src="js/main.js"></script>
@endsection()

</body>
</html>