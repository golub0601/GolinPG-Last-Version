<!-- ============POP UP meeting========== -->
   
  <div id="myModal" class="modal">
  <div class="container row meeting" >
  <img src="img/GolinPG.svg" alt="" style="margin: auto; height: 10%;">
  <img id="close-met" onclick="document.getElementById('myModal').style.display='none'" src="img/x.svg" alt=""><br>
  <div class="col-sm-12">
  <h5 style="color: white; text-align: center;">Zakažite sastanak sa nekim od naših poslodavaca</h5>
  </div>  
  <div class="container">
    <form id="contact" action="index.php" method="post">
        <input placeholder="Vaše ime i prezime" class="form-control" type="text" tabindex="1" name="username" required autofocus><br>
        <input placeholder="Vaša e-mail adresa" type="email" class="form-control" tabindex="2" name="email" required><br>
        <input placeholder="Broj telefona" type="tel" class="form-control" tabindex="3" name="phone_number" required><br>
        <input placeholder="Ime kompanije"  class="form-control" type="text" tabindex="4" name="company" required><br>
        <div class="row container" style="padding: auto;">
          <div class="col-xs-3" style="margin: auto; padding: auto;">
            <label style="color:white; text-align: center; font-weight: bold;" for="appt-time">Vrijeme:</label>
          <input class="form-control" style="" type="time" id="appt-time" name="time_of" required />
          </div>
           <div class="col-xs-3" style="margin: auto; padding: auto;">
            <label style="color:white; text-align: center; font-weight: bold;" for="start">Datum</label>
          <input class="form-control" type="date" id="start" name="date"
                 value="2018-07-22"
                max="2020-12-31"/>
          </div>
        </div>
         <div class="col-xs-3" style="margin: auto; padding: auto; margin-top: 5%">
                 <input style="font-weight: bold; background-color: #f2cd29; padding-right: 50px; padding-left: 50px;" class="btn" type="submit" name="submit_meeting" value="ZAKAŽI SASTANAK">
          </div>
    </form>
</div>
</div>    
</div>
<!--=========== end of pop up meeting =======-->