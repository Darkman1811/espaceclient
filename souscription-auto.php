<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>My AXA | Souscription assurance auto</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->

  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="plugins/iCheck/all.css">

  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  
  <!-- demo style -->
  <style>
    /* FROM HTTP://WWW.GETBOOTSTRAP.COM
     * Glyphicons
     *
     * Special styles for displaying the icons and their classes in the docs.
     */

    .bs-glyphicons {
      padding-left: 0;
      padding-bottom: 1px;
      margin-bottom: 20px;
      list-style: none;
      overflow: hidden;
    }

    .bs-glyphicons li {
      float: left;
      width: 25%;
      height: 115px;
      padding: 10px;
      margin: 0 -1px -1px 0;
      font-size: 12px;
      line-height: 1.4;
      text-align: center;
      border: 1px solid #ddd;
    }

    .bs-glyphicons .glyphicon {
      margin-top: 5px;
      margin-bottom: 10px;
      font-size: 24px;
    }

    .bs-glyphicons .glyphicon-class {
      display: block;
      text-align: center;
      word-wrap: break-word; /* Help out IE10+ with class names */
    }

    .bs-glyphicons li:hover {
      background-color: rgba(86, 61, 124, .1);
    }

    @media (min-width: 768px) {
      .bs-glyphicons li {
        width: 12.5%;
      }
    }
  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini fixed">
<div class="wrapper">

<?php include "header.php"?>
 
<?php include "sidebar.php"?>
  
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Assurance Auto
       
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Tableau de bord</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#souscription" data-toggle="tab">Souscription</a></li>
                 <li><a href="#devis" data-toggle="tab">Demander un devis</a></li>
              <li><a href="#sinistre" data-toggle="tab">Déclarer un sinistre</a></li>
               <li><a href="#contrats" data-toggle="tab">Consulter vos contrats</a></li>
               <li><a href="#factures" data-toggle="tab">Consulter vos factures</a></li>
           
            </ul>
            <div class="tab-content">
              <!-- Font Awesome Icons -->
              <div class="tab-pane active" id="souscription">
               <?php include "souscription.php";?>
              </div>
              <!-- /#fa-icons -->

              <!-- glyphicons-->
              <div class="tab-pane" id="devis">

               <?php include "devis.php";?>
              </div>
              <div class="tab-pane" id="sinistre">

               <div class="row">
               <div class="col-md-6">
<div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Rappel de vos coordonnées personnels</h3>
            </div>
            <div class="box-body">
              <!-- Date dd/mm/yyyy -->
              <strong><i class="fa fa-user"></i> Titulaire</strong>

              <p class="text-muted">
                Oumar FALL
              </p>
              <strong><i class="fa fa-envelope"></i> Email</strong>

              <p class="text-muted">
                oumaro@gmail.com
              </p>

              <hr>
              <strong><i class="fa fa-phone-square"></i> Téléphone</strong>

              <p class="text-muted">
               +221 77 556 66 65
              </p>
              <hr>
              <strong><i class="fa fa-phone-square"></i> Entreprise</strong>

              <p class="text-muted">
               Beut7creative
              </p>

              <hr>

              <strong><i class="fa fa-home"></i> Adresse</strong>

              <p class="text-muted">Mariste 2 ville z35 Dakar, Sénégal</p>

              <hr>

              <strong><i class="fa fa-calendar-check-o"></i> Date de naissance</strong>

              <p>
               20/07/1984
              </p>

              

            </div>
            <!-- /.box-body -->
          </div>
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Véhicule endommagé</h3>
            </div>
            <div class="box-body">
              <!-- Date dd/mm/yyyy -->
              <div class="form-group">
                <label>Marque</label>
                <select aria-hidden="true" tabindex="-1" class="form-control select2 select2-hidden-accessible" style="width: 100%;">
                  <option selected="selected">Sélectionner une marque</option>
                  <option>Mercedes</option>
                  <option>Toyota</option>
                  <option>Renault</option>
                  <option>Cytroen</option>
                  <option>Peugeot</option>
                  <option>Hyundai</option>
                </select>
              </div>
              <!-- /.form group -->
 <div class="form-group">
                <label>Modéle</label>
                <select aria-hidden="true" tabindex="-1" class="form-control select2 select2-hidden-accessible" style="width: 100%;">
                  <option selected="selected">Sélectionner un model</option>
                  <option>classe E</option>
                  <option>camry</option>
                  <option>Mégane</option>
                  <option>DS4</option>
                  <option>508</option>
                  <option>Sonata</option>
                </select>
              </div>
              
               <div class="form-group">
                <label>Puissance fiscale</label>
                <select aria-hidden="true" tabindex="-1" class="form-control select2 select2-hidden-accessible" style="width: 100%;">
                  <option selected="selected">Sélectionner une puissance</option>
                  <option>10 à 20 chs</option>
                  <option>20 à 30 chs</option>
                  <option>30 à 40 chs</option>
                  <option>40 à 50 chs</option>
                  <option>50 à 60 chs</option>
                  <option>60 à 70 chs</option>
                </select>
              </div>
               <div class="form-group">
                  <label>Immatriculé</label>
                  <input class="form-control" placeholder="Saisir le numero d'immatriculation" type="text">
                </div>
                <div class="form-group">
                  <label>Châssis n°</label>
                  <input class="form-control" placeholder="Saisir le numero d'immatriculation" type="text">
                </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->

        </div>
        
        
        <div class="col-md-6">
<div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Renseignements concernant l’accident </h3>
            </div>
            <div class="box-body">
              <!-- Date dd/mm/yyyy -->
              <div class="form-group">
                <label>concernés </label>
                <select aria-hidden="true" tabindex="-1" class="form-control select2 select2-hidden-accessible" style="width: 100%;">
                  <option selected="selected">Sélectionner</option>
                  <option>piéton</option>
                  <option>véhicule
</option>
                 
                </select>
              </div>
              <!-- /.form group -->
<div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input class="form-control pull-right" id="datepicker" type="text">
                </div>
                <!-- /.input group -->
              </div>
              
              
             <div class="bootstrap-timepicker"><div class="bootstrap-timepicker-widget dropdown-menu open"><table><tbody><tr><td><a href="#" data-action="incrementHour"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementMinute"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td class="meridian-column"><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-up"></i></a></td></tr><tr><td><span class="bootstrap-timepicker-hour">02</span></td> <td class="separator">:</td><td><span class="bootstrap-timepicker-minute">00</span></td> <td class="separator">&nbsp;</td><td><span class="bootstrap-timepicker-meridian">PM</span></td></tr><tr><td><a href="#" data-action="decrementHour"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator"></td><td><a href="#" data-action="decrementMinute"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-down"></i></a></td></tr></tbody></table></div>
                <div class="form-group">
                   <label>Heure précises de l’accident:</label>

                  <div class="input-group">
                    <input class="form-control timepicker" type="text">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>
<div class="form-group">
                <label>Type de dégâts : </label>
                <select aria-hidden="true" tabindex="-1" class="form-control select2 select2-hidden-accessible" style="width: 100%;">
                  <option selected="selected">Sélectionner</option>
                  <option>Matériel</option>
                  <option>corporel
</option><option>Matériel & corporel
</option>
                 
                </select>
              </div>
              
              <div class="form-group">
                <label>Dégât
s/dommage(s)constatés :  : </label>
                <select aria-hidden="true" tabindex="-1" class="form-control select2 select2-hidden-accessible" style="width: 100%;">
                  <option selected="selected">Sélectionner</option>
                  <option>Oui :par un agent le domaine public</option>
                  <option>Oui :par un huissier de justice</option>
                  <option>Oui :par un/des tier(s) autre </option>
                  <option>Non
</option>
                 
                </select>
              </div>
              
              <div class="form-group">
                  <label>Cause de l’a
ccident </label>
                  <textarea class="form-control" rows="3" placeholder="Explquez ..."></textarea>
                </div>
                <div class="form-group">
                  <label>Cir
constances de l’accident </label>
                  <textarea class="form-control" rows="3" placeholder="Comment s’est
-il déroulé ..."></textarea>
                </div>
                <div class="form-group">
                  <label>Dégâts matériels</label>
                  <textarea class="form-control" rows="3" placeholder="écrivez vos dégâts et détaillez autant que 
possible"></textarea>
                </div>
            </div>
            <!-- /.box-body -->
          </div>




          
          <!-- /.box -->

          <button type="button" class="btn btn-block btn-primary">Envoyer la déclaration du sinistre</button>
          <!-- /.box -->

        </div>
               </div>
              </div>
              <div class="tab-pane" id="contrats">

              <?php include "contrat.php";?>
              </div>
              <div class="tab-pane" id="factures">
<?php include "facture.php";?>
               
              </div>
              <!-- /#ion-icons -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include "footer.php";?>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/select2/select2.full.min.js"></script>
<script src="plugins/fastclick/fastclick.js"></script>
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->

<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>

</body>
</html>
