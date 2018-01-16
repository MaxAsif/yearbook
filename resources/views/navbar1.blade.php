<style type="text/css">
  
.nav-pills .nav-link.active, .nav-pills .show > .nav-link{
  background-color: #17A2B8;
}
.dropdown-menu{
  top: 60px;
  right: 0px;
  left: unset;
  width: 460px;
  box-shadow: 0px 5px 7px -1px #c1c1c1;
  padding-bottom: 0px;
  padding: 0px;
}
.dropdown-menu:before{
  content: "";
  position: absolute;
  top: -20px;
  right: 12px;
  border:10px solid #343A40;
  border-color: transparent transparent #343A40 transparent;
}
.head{
  padding:5px 15px;
  border-radius: 3px 3px 0px 0px;
}
.notification-box{
  padding: 10px 0px; 
}
.bg-gray{
  background-color: #eee;
}
@media (max-width: 640px) {
    .dropdown-menu{
      top: 50px;
      left: -16px;  
      width: 290px;
    } 
    .nav{
      display: block;
    }
    .nav .nav-item,.nav .nav-item a{
      padding-left: 0px;
    }
    .message{
      font-size: 13px;
    }
}
</style>
<nav class="navbar navbar-expand-sm navbar-light bg-dark" style="height: 86px">
  <a class="navbar-brand text-light" href="http://www.sac.iitkgp.ac.in"><img height="90" width="250" src="../sac.png" alt="someimg"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="display: unset !important;">
    <ul class="nav nav-pills mr-auto justify-content-end">
      <li class="nav-item active">
        <a class="nav-link text-light" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="/logout">Logout <span class="sr-only">{{Auth::user()->name}}</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link text-light" href="http://www.sac.iitkgp.ac.in"></a>
      </li>



      <li class="nav-item dropdown">
        <a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-bell"></i>
        </a>
        <ul class="dropdown-menu">
          <li class="head text-light bg-dark">
            <div class="row">
              <div class="col-lg-12 col-sm-12 col-12">
                <span>Notifications (3)</span>
                
              </div>
            </li>
            <li class="notification-box">
              <div class="row">
                <div class="col-lg-3 col-sm-3 col-3 text-center">
                  <img src="2.jpg" class="w-50 rounded-circle">
                </div>    
                <div class="col-lg-8 col-sm-8 col-8">
                  <strong class="text-info">David John</strong>
                  <div>
                    Lorem ipsum dolor sit amet, consectetur
                  </div>
                  <small class="text-warning">27.11.2015, 15:00</small>
                </div>    
              </div>
            </li>
            <li class="notification-box bg-gray">
              <div class="row">
                <div class="col-lg-3 col-sm-3 col-3 text-center">
                  <img src="image/prof.jpg" class="w-50 rounded-circle">
                </div>    
                <div class="col-lg-8 col-sm-8 col-8">
                  <strong class="text-info">David John</strong>
                  <div>
                    Lorem ipsum dolor sit amet, consectetur
                  </div>
                  <small class="text-warning">27.11.2015, 15:00</small>
                </div>    
              </div>
            </li>
            <li class="notification-box">
              <div class="row">
                <div class="col-lg-3 col-sm-3 col-3 text-center">
                  <img src="image/prof.jpg" class="w-50 rounded-circle">
                </div>    
                <div class="col-lg-8 col-sm-8 col-8">
                  <strong class="text-info">David John</strong>
                  <div>
                    Lorem ipsum dolor sit amet, consectetur
                  </div>
                  <small class="text-warning">27.11.2015, 15:00</small>
                </div>    
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>