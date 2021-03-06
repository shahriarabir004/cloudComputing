<!DOCTYPE HTML>  
<html> 
  <head>
      <title>Weather</title>
      <h1>Weather Today</h1>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" >
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
      <style>
           h1{margin: auto;}
           #visual{
            float: right;
           }
      </style>
  </head>
  <body> 
      <div class="container">
          <form method="get"  action="second?city=<?php echo $_GET['city']?>+year=<?php echo $_GET['year']?>+mo=<?php echo $_GET['mo']?>+date=<?php echo $_GET['date']?>">
              <div id="content">
                
                <div id="visual">
              <iframe width="600" height="355" src="https://datastudio.google.com/embed/reporting/1btfXFUN5ZLVFK_D3UJnRrYNLhW1n9TaV/page/2WpZ" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
                    <img src="https://www.kids-world-travel-guide.com/images/xaustralia_map_shutterstock_src70.jpg.pagespeed.ic.pOhRDiiEE3.jpg"  alt="Australia Map"
                        height="400" width="400" usemap="#australiamap">
                    <map name="australiamap">
                      <area shape="poly" coords="246,341,239,253,409,256,395,453" alt="South Australia" href="https://en.wikipedia.org/wiki/South_Australia">
                      <area shape="poly" coords="238,345,63,412,5,215,106,154,191,48,230,68" alt="Western Australia" href="https://en.wikipedia.org/wiki/Western_Australia">

                      <area shape="poly" coords="237,249,368,250,372,98,332,70,354,18,262,20,232,71" alt="Northern Terrotory" href="https://en.wikipedia.org/wiki/Northern_Territory">
                      <area shape="poly" coords="368,251,372,101,406,113,447,6,522,166,573,253,582,307,407,305,407,258" alt="Queensland" href="https://en.wikipedia.org/wiki/Queensland">
                      <area shape="poly" coords="402,388,409,305,587,313,511,453" alt="New South Wales" href="https://en.wikipedia.org/wiki/New_South_Wales">
                      <area shape="poly" coords="399,457,403,388,447,424,490,434,508,456,465,475" alt="Victoria" href="https://en.wikipedia.org/wiki/Victoria">
                      <area shape="poly" coords="439,508,462,513,486,509,479,537,457,552,446,540" alt="Tasmania" href="https://en.wikipedia.org/wiki/Tasmania">
                    </map>
              </div>
              
            <br></br>

        <h5>Type the name of state to search for weather</h5>
        <p></p>
        <input type="text" class="form-control" id="city" name="city" aria-describedby="city" placeholder="E.g Victoria, Queensland" required>
        <span class="validity"></span>
        <div class="fallbackDatePicker">
    <div>
       <span>
        <label for="date">Date:</label>
        <select id="date" name="date">
          <option selected>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
          <option>13</option>
          <option>14</option>
          <option>15</option>
          <option>16</option>
          <option>17</option>
          <option>18</option>
          <option>19</option>
          <option>20</option>
          <option>21</option>
          <option>22</option>
          <option>23</option>
          <option>24</option>
          <option>25</option>
          <option>26</option>
          <option>27</option>
          <option>28</option>
          <option>29</option>
          <option>30</option>
          <option>31</option>
        </select>
      </span>
      <span>
        <label for="month">Month:</label>
        <select id="month" name="month">
           <option selected>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
        </select>
      </span>
      <span>
        <label for="year">Year:</label>
        <select id="year" name="year">
          <option selected>2018</option>
          <option>2017</option>
          <option>2016</option>
          <option>2015</option>
          <option>2014</option>
          <option>2013</option>
        </select>
      </span>
    </div>
  </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
  </body> 
</html>