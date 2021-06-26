<style>
     body {
          background-color: #CAE1F2;
     }

     h3 {
          font-weight: 100;
          text-transform: uppercase;
          color: #0F5E9A;
          font-family: "Lucida Console", Courier, monospace;

     }

     table {
          padding: 50px;

          padding-left: 200px;
          padding-right: 200px;
          background-color: white;
     }
</style>
<h2>
     <center> Student's Profile </center>
     <h2>
          <center>
               <table>
                    <tr>
                         <td>
                              <h3>NAME :<h3>
                         </td>
                         <td> <?php echo $_POST['name']; ?> </td>
                    </tr>
                    <tr>
                         <td>
                              <h3>DateofBirth :<h3>
                         </td>
                         <td><?php echo $_POST['DateofBirth']; ?></td>
                    </tr>
                    <tr>
                         <td>
                              <h3>gender :<h3>
                         </td>
                         <td><?php echo $_POST['gender']; ?></td>
                    </tr>
                    <tr>
                         <td>
                              <h3>city :<h3>
                         </td>
                         <td><?php echo $_POST['city']; ?></td>
                    </tr>
                    <tr>
                         <td>
                              <h3>nationality :<h3>

                         </td>
                         <td><?php echo $_POST['nationality']; ?></td>
                    </tr>
                    <tr>
                         <td>
                              <h3>pincode :<h3>

                         </td>
                         <td><?php echo $_POST['pincode']; ?></td>
                    </tr>
                    <tr>
                         <td>
                              <h3>email :<h3>

                         </td>
                         <td><?php echo $_POST['email']; ?></td>
                    </tr>
                    <tr>
                         <td>
                              <h3>mobile :<h3>

                         </td>
                         <td><?php echo $_POST['mobile']; ?></td>
                    </tr>
                    <tr>
                         <td>
                              <h3>address :<h3>

                         </td>
                         <td><?php echo $_POST['address']; ?></td>
                    </tr>
                    <tr>
                         <td>
                              <h3>ssc sCHOOL name :<h3>

                         </td>
                         <td><?php echo $_POST['sscsname']; ?></td>
                    </tr>
                    <tr>
                         <td>
                              <h3>ssc perCENTAGE :<h3>

                         </td>
                         <td><?php echo $_POST['sscper']; ?></td>
                    </tr>
                    <tr>
                         <td>
                              <h3>hsc sCHOOL name :<h3>

                         </td>
                         <td><?php echo $_POST['hscsname']; ?></td>
                    </tr>
                    <tr>
                         <td>
                              <h3>hsc perCENTAGE :<h3>

                         </td>
                         <td><?php echo $_POST['hscper']; ?></td>
                    </tr>
                    <tr>
                         <td>
                              <h3>degree cOLLEGE name :<h3>

                         </td>
                         <td><?php echo $_POST['degreecname']; ?></td>
                    </tr>
                    <tr>
                         <td>
                              <h3>degree depARTMENT :<h3>

                         </td>
                         <td><?php echo $_POST['degreedep']; ?></td>
                    </tr>
                    <tr>
                         <td>
                              <h3>degree perCENTAGE :<h3>
                         </td>
                         <td><?php echo $_POST['degreeper']; ?></td>
                    </tr>


          </center>