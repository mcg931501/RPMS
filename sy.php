<header>
    <?php
    include 'header.php';
    ?>
</header>
<!-- add a active status on the database! -->
    <main>
      
        <div  class="container col-sm-12 my-4 bg-light">
            <form action="includes/importsy.inc.php" class="form-inline" method="post">
                <legend class="legend-control"><strong>School Year</strong> </legend>
                    <label for="start-month" class="control-label "><strong>Enter the start date: </strong></label>
                        <select name="start-month" class="form-control mx-2" width="100">
                            <option value="">--Choose Month--</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>

                        <select name="start-day" id="" class="form-control mx-2">
                        <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22 </option>
                            <option value="23">23 </option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                        <input  type="text" name="start-year" id="start-year" value="
                        <?php 
                        
                        $currYear = date('Y');
                        echo trim($currYear);
                        
                            

                        ?>"  class="form-control mx-2" maxlength="4" disabled> 

                    <label for="end-month" class="control-label mx-3   "><strong>Enter the end date: </strong></label>
                    <select name="end-month" class="form-control mx-2">
                            <option value="">--Choose Month--</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>

                        <select name="end-day" id="" class="form-control mx-2">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22 </option>
                            <option value="23">23 </option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>

                        </select>

                        <input type="text" name="end-year" id="start-year" value="
                        <?php 
                            $currentYear =  date('Y');
                            $nextYear = strtotime('next Year');
                            $nextYearDate = date('Y',$nextYear);
                            echo $nextYearDate;
                            
                         ?>"
                           class="form-control mx-2" maxlength="4" disabled>


              
                <button type="submit" class="btn btn-success  my-2" name="sy-set" id="sy-set">Set </button>
                
            </form>
        </div>

     

             
            <!--
             <form action="includes/importSy.inc.php" id="post-ajax" method="POST">
                <input type="date" name="sdate" id="sdate" >
                <input type="date" name="edate" id="edate" >
                <button type="submit">Submit</button>
             </form>

             <script src="/includes/func.lib.js">
                document.getElementById('post-ajax').addEventListener('submit',getDate);
             </script>
             -->
    </main>

    //Team Guerra FTW

<footer>

</footer>
   
