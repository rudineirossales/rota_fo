<?php 
         include "coon.php"; 
      
         session_start();

         if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"])  )
            {
                 header("Location: index.html");
                  exit;
            }
?>


<!DOCTYPE html>
<html lang="en">
  <head>


  <script language="Javascript">
function confirmacao(id) {
     var resposta = confirm("Deseja remover esse registro?");
 
     if (resposta == true) {
          window.location.href = "deletar.php?id="+id;
     }
}
</script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>



<script type="text/javascript">
       
      $(document).ready(function(){
          
         $("select[name=anuf]").change(function(){
            $("select[name=trecho]").html('<option value="0">Carregando...</option>');
             
            $.post("anuf.php",
                  {anuf:$(this).val()},
                  function(valor){
                     $("select[name=trecho]").html(valor);
                  }
                  )

                 
             
         })



         $("select[name=cdo]").change(function(){
            $("select[name=logradouro]").html('<option value="0">Carregando...</option>');
            $.post("cdo.php",
                  {cdo:$(this).val()},
                    function(valor){
                      $("select[name=logradouro]").html(valor);
                  }
                  )


          })


          

          




         $("select[name=cdo]").change(function(){
            $("select[name=fachada]").html('<option value="0">Carregando...</option>');
            $.post("cdo.php",
                  {cdo:$(this).val()},
                    function(valor){
                      $("select[name=fachada]").html(valor);
                  }
                  )
          })
      })
       
</script>


    <link rel="icon" href="img/serede.png"> 

    
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>ROTAS</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="dashboard.php">Serede</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      
      <ul class="app-nav">
       
        <!--Notification Menu-->
       
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
        
      </ul>
    </header>
    <!-- Sidebar menu -->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" style="width:38px; height:40px;" src="img/serede.jpg" alt="User Image">
      
        <div>
          
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i> Bootstrap Elements</a></li>
            <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Font Icons</a></li>
            <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a></li>
            <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>
          </ul>
        </li>
        
        
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Menu</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
           
            
            <li><a class="treeview-item" href="http://187.54.30.83/dgo"><i class="icon fa fa-circle-o"></i> Dgo </a></li>
            <li><a class="treeview-item" href="cadastro.php"><i class="icon fa fa-circle-o"></i> Cadastro </a></li>
            
           
          </ul>
        </li>
    
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Rotas</h1>
         
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tabelas</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">

        
          <div class="tile">
          
            <div class="table-responsive">
            <div class="col-md-4">
            <form class="form" role="form"   method="POST" action="dashboard.php" style="margin-left:10%;">
    
         <div class="form-group" >  
                        <label for="email" >ANUF:</label> <br>
                        <select class="form-control"  name="anuf">
                          
                          <?php
                        
                              
                        $sql = "SELECT * FROM rota  group by anuf order by anuf";
                        $qr = mysql_query($sql) or die(mysql_error());
                        while($ln = mysql_fetch_assoc($qr)){
                            echo '<option value="'.$ln['anuf'].'">'.$ln['anuf'].'</option>';
                        }
                            ?>
                          
                        </select>
        </div> 

        <div class="form-group">  
                <label for="email" >   TRECHO  :</label> <br>
                <select class="form-control" name="trecho" required >
                  <option value="0" disabled="disabled" required>Escolha um trecho</option>
                </select>
        </div>
    
    <button type="submit"  name="submit" id="submit" class="btn btn-default">Busca</button> <br><br><br><br>
  </form>
  </div>         
<?php
  if (isset($_POST ['submit']) )
  {
  

$anuf = $_POST['anuf'];
$trecho = $_POST['trecho'];




    $sql = mysql_query ("select * from rota where anuf = '$anuf'  and trecho = '$trecho'" );



    $row = mysql_num_rows($sql);

 
 

    if (mysql_num_rows($sql) > 0)
    {
      while ($dado = mysql_fetch_assoc($sql))
      
        {
     
          $id = $dado['id'];
          $rota = $dado['rota'];

      ?>     
             

             <?php } ?> 
      <?php 
                      
      } 

      
         
    ?>
         <iframe src="<?php echo $rota ?>" width="100%" height="480"></iframe>  
             <?php if( $_SESSION['acesso'] == "ADM") { ?>
             <a href="javascript:func()"
             onclick="confirmacao('<?php echo $id;?>')" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Deletar</a> 
             <a href="editar.php?id=<?php echo $id;?>"
             class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Editar</a>   <?php    } }?>   
            </div>
          </div>
        </div>
      </div>
    </main>
    
    <!-- Essential javascripts for application to work-->

    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>

  
  </body>
</html>