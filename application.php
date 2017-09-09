<?php 
/**
 * @file        Application View
 * @author      Luxsys <support@freelancecockpit.com>
 * @copyright   By Luxsys (http://www.freelancecockpit.com)
 * @version     3.x.x
 */


$act_uri = $this->uri->segment(1, 0);
$lastsec = $this->uri->total_segments();
$act_uri_submenu = $this->uri->segment($lastsec);
if(!$act_uri){ $act_uri = 'dashboard'; }
if(is_numeric($act_uri_submenu)){ 
    $lastsec = $lastsec-1; 
    $act_uri_submenu = $this->uri->segment($lastsec);
}
$message_icon = false;
 ?> 
<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="robots" content="none" />
    <link rel="SHORTCUT ICON" href="<?=base_url()?>assets/blueline/img/favicon.ico"/>
    <title><?=$core_settings->company;?></title> 

    <!-- Bootstrap core CSS and JS -->  
    <script src="<?=base_url()?>assets/blueline/js/plugins/jquery-2.2.4.min.js?ver=<?=$core_settings->version;?>"></script>  
    
    <!-- Google Font Loader -->
    <script type="text/javascript">
        WebFontConfig = {
          google: { families: [ 'Open+Sans:400italic,400,300,600,700:latin,latin-ext' ] }
        };
        (function() {
          var wf = document.createElement('script');
          wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
          wf.type = 'text/javascript';
          wf.async = 'true';
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(wf, s);
        })(); 
   </script>

    <link rel="stylesheet" href="<?=base_url()?>assets/blueline/css/app.css?ver=<?=$core_settings->version;?>"/>
    <link rel="stylesheet" href="<?=base_url()?>assets/blueline/css/user.css?ver=<?=$core_settings->version;?>"/> 
    <?=get_theme_colors($core_settings);?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

<body>
<div id="mainwrapper">
    <div class="side">
    <div class="sidebar-bg"></div>
        <div class="sidebar">
        <div class="navbar-header">
         
          <a class="navbar-brand" href="#"><img src="<?=base_url()?><?=$core_settings->logo;?>" alt="<?=$core_settings->company;?>"></a>
        </div>

          <ul class="nav nav-sidebar">
              <?php 
          if (is_array($menu) || is_object($menu)){
             foreach ($menu as $key => $value) { 
               if(strtolower($value->name) == "messages"){$message_icon = true;}
               ?>
               <li id="<?=strtolower($value->name);?>" class="<?php if ($act_uri == strtolower($value->name)) {echo "active";}?>">
                  <a href="<?=site_url($value->link);?>">
                      <span class="menu-icon">
                          <i class="fa <?=$value->icon;?>"></i>
                      </span>
                      <span class="nav-text">
                          <?php echo $this->lang->line('application_'.$value->link);?>
                      </span>
                <?php if(strtolower($value->name) == "messages" && $messages_new[0]->amount != "0"){ $message_icon = true; ?><span class="notification-badge"><?=$messages_new[0]->amount;?></span><?php } ?>
                <?php if(strtolower($value->name) == "quotations" && $quotations_new != "0"){ ?><span class="notification-badge"><?=$quotations_new;?></span><?php } ?>
                <?php if(strtolower($value->name) == "tickets" && $tickets_new != "0"){ ?><span class="notification-badge"><?=$tickets_new;?></span><?php } ?>
               </a> </li>
              <?php } } ?>
          </ul>
            
    <?php 
    if (is_array($widgets) || is_object($widgets)){
      foreach ($widgets as $key => $val) {
          
        if($sticky && $val->link == "quickaccess"){ ?>
            <ul class="nav nav-sidebar quick-access menu-sub hidden-sm hidden-xs">
            <h4><?=$this->lang->line('application_quick_access');?></h4>

                <?php foreach ($sticky as $value): ?>
                
                    <li>
                        <a href="<?=base_url()?>projects/view/<?=$value->id;?>">
                          <p class="truncate"> <?=$value->name;?> </p>
                          <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?=$value->progress;?>%;"></div>
                          </div>
                        </a>
                       <div class="submenu">
                            <ul>
                            <?php if(is_object($value->company)){ ?>
                            <li class="underline"><a href="<?=base_url()?>clients/view/<?=$value->company_id;?>"><b><?=$value->company->name?></b></a></li>
                            <?php } ?>
                              <li><a data-toggle="mainmodal" href="<?=base_url()?>projects/update/<?=$value->id;?>"> <?=$this->lang->line('application_edit_project');?></li>
                              <li><a data-toggle="mainmodal" href="<?=base_url()?>projects/tasks/<?=$value->id;?>/add"> <?=$this->lang->line('application_add_task');?></li>
                              <li><a href="<?=base_url()?>projects/tracking/<?=$value->id;?>" id="<?=$value->id;?>"><?php if(empty($value->tracking)){ echo $this->lang->line("application_start_timer");}else{echo $this->lang->line("application_stop_timer");} ?></a></li>
                            </ul>
        
                        </div>
                    </li>
                   <?php endforeach; ?> 
            </ul>
        <?php } }
            
        if($user_online && $val->link == "useronline"){ ?>    

            <ul class="nav nav-sidebar user-online menu-sub hidden-sm hidden-xs">
            <h4><?=$this->lang->line('application_user_online');?></h4>
            <?php foreach ($user_online as $value): 
                if($value->last_active+(15 * 60) > time()){ $status = "online";}else{ $status = "away";} ?>
                <li>
                    <a href="#" >
                      <p class="truncate"><img class="img-circle" src="<?=get_user_pic($value->userpic, $value->email);?>" width="21px" /> 
                        <span class="user_online__indicator user_online__indicator--<?=$status;?>"></span>
                        <?php echo $value->firstname." ".$value->lastname;?> 
                      </p>
                    </a>
                </li>
            <?php endforeach; ?> 
            </ul> 
            
            <?php if($client_online){ ?>
                <ul class="nav nav-sidebar user-online menu-sub hidden-sm hidden-xs">
                    <h4><?=$this->lang->line('application_client_online');?></h4>
                    <?php foreach ($client_online as $value):
                        if($value->last_active+(15 * 60) > time()){ $status = "online";}else{ $status = "away";} ?>
                        <li>
                            <a href="#" class="<?=$status;?>">
                              <p class="truncate"><img class="img-circle" src="<?php echo get_user_pic($value->userpic, $value->email);?>" width="21px"> <?php echo $value->firstname." ".$value->lastname;?> </p>
                            </a>
                           <!-- <div class="submenu">
                                <ul>
                                  <li><a href="#"><span class="menu-icon"><i class="icon dripicons-mail-o"></i></span> <?=$this->lang->line('application_write_a_message');?></a></li>
                                </ul>
            
                            </div>-->
                        </li>
                    <?php endforeach; ?> 
                </ul>
            <?php } } } ?>
          
        </div>
    </div>

    <div class="content-area" onclick="">
      <div class="row mainnavbar">
      <div class="topbar__left noselect">
          <a href="#" class="menu-trigger"><i class="ion-navicon visible-xs"></i></a>
          <i class="icon dripicons-menu topbar__icon fc-dropdown--trigger hidden"></i>
            <div class="fc-dropdown shortcut-menu grid">
                  <div class="grid__col-6 shortcut--item"><i class="ion-ios-paper-outline shortcut--icon"></i> <?=$this->lang->line('application_create_invoice');?></div>
                  <div class="grid__col-6 shortcut--item"><i class="ion-ios-lightbulb shortcut--icon"></i> <?=$this->lang->line('application_create_project');?></div>
                  <div class="grid__col-6 shortcut--item"><i class="ion-ios-pricetags shortcut--icon"></i> <?=$this->lang->line('application_create_ticket');?></div>
                  <div class="grid__col-6 shortcut--item"><i class="ion-ios-email shortcut--icon"></i> <?=$this->lang->line('application_write_messages');?></div>
            </div>
          <i class="icon dripicons-bell topbar__icon fc-dropdown--trigger" data-placement="bottom" title="<?=$this->lang->line('application_alerts');?>"><?php if($notification_count > 0){ ?><span class="topbar__icon_alert"></span><?php } ?></i>
              <div class="fc-dropdown notification-center">
                  <div class="notification-center__header">
                      <a href="#" class="active"><?=$this->lang->line('application_alerts');?> (<?=$notification_count;?>)</a>
                      <!-- <a href="#"><?=$this->lang->line('application_announcements');?></a> -->
                  </div>
                   <ul class="notificationlist">
                        <?php 
                              foreach ($notification_list as $value): ?>            
                                   <li class="">
                                        <p class="truncate"><?=$value;?></p>  
                                   </li>
                        <?php endforeach;?>
                        <?php if($notification_count == 0) { ?>
                                   <li> <p class="truncate"><?=$this->lang->line('application_no_events_yet');?></p></li>
                        <?php } ?>
                   </ul>   
              </div>
            
            <?php if(isset($projects_icon)){ ?>
            <i class="icon dripicons-stopwatch topbar__icon fc-dropdown--trigger" data-placement="bottom" title="<?=$this->lang->line('application_running_timers');?>"><?php if($task_notifications){ ?><span class="topbar__icon_alert"></span><?php } ?></i>
            <div class="fc-dropdown notification-center shortcut-menu">
            <div class="notification-center__header">
                      <a href="#" class="active"><?=$this->lang->line('application_running_timers');?></a>
                  </div>
                  <ul class="notificationlist task__notifications details">
                <?php foreach ($task_notifications as $value) { $task_count = 1;?>
                      <li>
                            <span><?=$value->project->name;?></span>
                            <a href="<?=base_url();?>projects/view/<?=$value->project_id;?>/<?=$value->id;?>"><?=$value->name;?></a>
                            <?php $timertime=(time()-$value->tracking)+$value->time_spent;?>
                            <span id="notification_timer<?=$value->id;?>" class="pull-right badge timer__badge resume"></span>
                                <script>$( document ).ready(function() { startTimer("resume", "<?=$timertime;?>", "#notification_timer<?=$value->id;?>"); });</script>
                      </li>
                 <?php } ?>
                 <?php if(!isset($task_count)) { ?>
                                   <li> <p class="truncate"><?=$this->lang->line('application_no_timers_running');?></p></li>
                        <?php } ?>
                 </ul>
            </div>
            <?php } ?>
            <?php if($message_icon){ ?>
              <span class="hidden-xs">
                  <a href="<?=site_url("messages");?>" title="<?=$this->lang->line('application_messages');?>">
                     <i class="icon dripicons-inbox topbar__icon"></i>
                  </a>
              </span>
            <?php } ?>
          <!-- <i class="ion-ios-search-strong topbar__icon shortcut-menu--trigger"></i> -->
      </div>
      <div class="topbar noselect">
      <?php  $userimage = get_user_pic($this->user->userpic, $this->user->email); ?>
      
      <img class="img-circle topbar-userpic" src="<?=$userimage;?>" height="21px">  
      <span class="topbar__name fc-dropdown--trigger">
          <span class="hidden-xs"><?php echo character_limiter($this->user->firstname." ".$this->user->lastname, 25);?></span> <i class="icon dripicons-chevron-down topbar__drop"></i>
      </span>
      <div class="fc-dropdown profile-dropdown">
        <ul>
          <li>
              <a href="<?=site_url("agent");?>" data-toggle="mainmodal">
                <span class="icon-wrapper"><i class="icon dripicons-gear"></i></span> <?=$this->lang->line('application_profile');?>
              </a>
          </li>
          
          <li class="fc-dropdown__submenu--trigger">
              <span class="icon-wrapper"><i class="icon dripicons-chevron-left"></i></span> <?=$current_language;?>
                <ul class="fc-dropdown__submenu">
                    <span class="fc-dropdown__title"><?=$this->lang->line('application_languages');?></span>
                    <?php foreach ($installed_languages as $entry)
                              { ?>
                                   <li>
                                       <a  href="<?=base_url()?>agent/language/<?=$entry;?>">
                                         
                                          
                                          <img src="<?=base_url()?>assets/blueline/img/<?=$entry;?>.png" class="language-img"> <?=ucwords($entry);?>
                                        </a>
                                   </li>
                                         
                       <?php  } ?>  
                </ul>
              
          </li>
            <li class="profile-dropdown__logout">
                    <a href="<?=site_url("logout");?>" title="<?=$this->lang->line('application_logout');?>">
                         <?=$this->lang->line('application_logout');?> <i class="icon dripicons-power pull-right"></i>
                    </a>  
            </li>
          </ul>
      </div>
      
  </div>       
</div>
        
    <?=$yield?>
      
</div>
    <!-- Notify -->
    <?php if($this->session->flashdata('message')) { $exp = explode(':', $this->session->flashdata('message'))?>
        <div class="notify <?=$exp[0]?>"><?=$exp[1]?></div>
    <?php } ?>
    <div class="ajax-notify"></div>
      
    <!-- Modal -->
    <div class="modal fade" id="mainModal" data-easein="flipXIn" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="mainModalLabel" aria-hidden="true"></div>
        
    <!-- Blueline Js -->  
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/app.js?ver=<?=$core_settings->version;?>"></script>
        <?php if(file_exists("assets/blueline/js/locales/flatpickr_".$current_language.".js")){ ?>
        <script type="text/javascript" src="<?=base_url()?>assets/blueline/js/locales/flatpickr_<?=$current_language?>.js?ver=<?=$core_settings->version;?>"></script>
        <?php } ?>
 </div> <!-- Mainwrapper end -->   

<script type="text/javascript" charset="utf-8">

function flatdatepicker(activeform){

      Flatpickr.localize(Flatpickr.l10ns.<?=$current_language?>);
      var required = "required";
      if($(".datepicker").hasClass("not-required")){required = "";}
      var datepicker = flatpickr('.datepicker', {
            dateFormat: 'Y-m-d', 
            timeFormat: '<?=$timeformat;?>',
            time_24hr: <?=$time24hours;?>,
            altInput:true, 
            'static': true,
            altFormat:'<?=$dateformat?>',
            altInputClass: 'form-control ',
            onChange: function(selectedDates, dateStr, instance){ 
                                    if(activeform && !$(".datepicker").hasClass("not-required")){activeform.validator('validate');}
                                    
                                     if($.inArray('datepicker-linked', instance.element.classList) == "-1" && $(".datepicker-linked").length == 1){ 
                                              datepickerLinked.set("minDate", dateStr);
                                            } 
                                }
      });
       var required = "required";
      if($(".datepicker-time").hasClass("not-required")){required = "";}
      var datepicker = flatpickr('.datepicker-time', {
            //dateFormat: 'U', 
            timeFormat: '<?=$timeformat;?>',
            time_24hr: <?=$time24hours;?>,
            altInput:true, 
            altInputClass: 'form-control ',
            altFormat:'<?=$dateformat?> <?=$timeformat;?>',
            onChange: function(selectedDates, dateStr, instance){ 
                                    if(activeform && !$(".datepicker-time").hasClass("not-required")){activeform.validator('validate');}
                                    if($.inArray('datepicker-time-linked', instance.element.classList) == "-1" && $(".datepicker-time-linked").length == 1){ 
                                              datepicker[1].set("minDate", dateStr);
                                            } 
                                }
      });

      if($(".datepicker-time-unix").hasClass("not-required")){required = "";}
      var datepicker = flatpickr('.datepicker-time-unix', {
            dateFormat: 'U', 
            //timeFormat: '<?=$timeformat;?>',
            time_24hr: <?=$time24hours;?>,
            altInput:true, 
            //static:true,
            altInputClass: 'form-control ',
            altFormat:'<?=$dateformat?> <?=$timeformat;?>',
            onChange: function(selectedDates, dateStr, instance){ 
                                    if(activeform && !$(".datepicker-time-unix").hasClass("not-required")){activeform.validator('validate');}
                                   
                                    
                                },
            onValueUpdate: function(selectedDates, dateStr, instance){
                                    timediff = $(".datepicker-time-unix.end_time").val()-$(".datepicker-time-unix.start_time").val();
                                    if(timediff > 0){
                                      timediff = timediff.secondsToHoursAndMinutes();
                                      $(".hours").val(timediff[0]);
                                      $(".minutes").val(timediff[1]);
                                    }
            }
      });
      if($(".datepicker-linked").hasClass("not-required")){var required = "";}else{var required = "required";}
      var datepickerLinked = flatpickr('.datepicker-linked', {
            dateFormat: 'Y-m-d', 
            timeFormat: '<?=$timeformat;?>',
            time_24hr: <?=$time24hours;?>,
            altInput:true, 
            altFormat:'<?=$dateformat?>',
            static:true,
            altInputClass: 'form-control ',
            onChange: function(d){ 
                                  if(activeform && !$(".datepicker-linked").hasClass("not-required")){activeform.validator('validate');}
                                }
      });
        //set dummyfields to be required
        $(".required").attr('required', 'required');
        
}
flatdatepicker();

      $(document).ready(function(){


        sorting_list("<?=base_url();?>");
        $("form").validator();

        $("#menu li a, .submenu li a").removeClass("active");
        if("" == "<?php echo $act_uri_submenu; ?>"){$("#sidebar li a").first().addClass("active");}  
        <?php if($act_uri_submenu != "0"){ ?>$(".submenu li a#<?php echo $act_uri_submenu; ?>").parent().addClass("active");<?php } ?>
        $("#menu li#<?php echo $act_uri; ?>").addClass("active");

        //Datatables

        var dontSort = [];
                $('.data-sorting thead th').each( function () {
                    if ( $(this).hasClass( 'no_sort' )) {
                        dontSort.push( { "bSortable": false } );
                    } else {
                        dontSort.push( null );
                    }
                } );


        $('table.data').dataTable({
          "initComplete": function () {
            var api = this.api();
            api.$('td.add-to-search').click( function () {
                api.search( $(this).data("tdvalue") ).draw();
            } );
        },
          "iDisplayLength": 25,
          stateSave: true,
          "bLengthChange": false,
          "aaSorting": [[ 0, 'desc']],
          "oLanguage": {
          "sSearch": "",
            "sInfo": "<?=$this->lang->line('application_showing_from_to');?>",
            "sInfoEmpty": "<?=$this->lang->line('application_showing_from_to_empty');?>",
            "sEmptyTable": "<?=$this->lang->line('application_no_data_yet');?>",
            "oPaginate": {
              "sNext": '<i class="icon dripicons-arrow-thin-right"></i>',
              "sPrevious": '<i class="icon dripicons-arrow-thin-left"></i>',
            }
          }
        });
        $('table.data-media').dataTable({
          "iDisplayLength": 15,
          stateSave: true,
          "bLengthChange": false,
          "bFilter": false, 
          "bInfo": false,
          "aaSorting": [[ 0, 'desc']],
          "oLanguage": {
          "sSearch": "",
            "sInfo": "<?=$this->lang->line('application_showing_from_to');?>",
            "sInfoEmpty": "<?=$this->lang->line('application_showing_from_to_empty');?>",
            "sEmptyTable": " ",
            "oPaginate": {
              "sNext": '<i class="icon dripicons-arrow-thin-right"></i>',
              "sPrevious": '<i class="icon dripicons-arrow-thin-left"></i>',
            }
          }
        });
        $('table.data-no-search').dataTable({
          "iDisplayLength": 8,
          stateSave: true,
          "bLengthChange": false,
          "bFilter": false, 
          "bInfo": false,
          "aaSorting": [[ 1, 'desc']],
          "oLanguage": {
          "sSearch": "",
            "sInfo": "<?=$this->lang->line('application_showing_from_to');?>",
            "sInfoEmpty": "<?=$this->lang->line('application_showing_from_to_empty');?>",
            "sEmptyTable": " ",
            "oPaginate": {
              "sNext": '<i class="icon dripicons-arrow-thin-right"></i>',
              "sPrevious": '<i class="icon dripicons-arrow-thin-left"></i>',
            }
          },
          fnDrawCallback: function (settings) {
              $(this).parent().toggle(settings.fnRecordsDisplay() > 0);
              if (settings._iDisplayLength > settings.fnRecordsDisplay()) {
            $(settings.nTableWrapper).find('.dataTables_paginate').hide();
        }

          }

        });
        $('table.data-sorting').dataTable({
          "iDisplayLength": 25,
          "bLengthChange": false,
          "aoColumns": dontSort,
          "aaSorting": [[ 1, 'desc']],
          "oLanguage": {
          "sSearch": "",
            "sInfo": "<?=$this->lang->line('application_showing_from_to');?>",
            "sInfoEmpty": "<?=$this->lang->line('application_showing_from_to_empty');?>",
            "sEmptyTable": "<?=$this->lang->line('application_no_data_yet');?>",
            "oPaginate": {
              "sNext": '<i class="icon dripicons-arrow-thin-right"></i>',
              "sPrevious": '<i class="icon dripicons-arrow-thin-left"></i>',
            }
          }
        });
        $('table.data-small').dataTable({
          "iDisplayLength": 5,
          "bLengthChange": false,
          "aaSorting": [[ 2, 'desc']],
          "oLanguage": {
          "sSearch": "",
            "sInfo": "<?=$this->lang->line('application_showing_from_to');?>", 
            "sInfoEmpty": "<?=$this->lang->line('application_showing_from_to_empty');?>",
            "sEmptyTable": "<?=$this->lang->line('application_no_data_yet');?>",
            "oPaginate": {
              "sNext": '<i class="icon dripicons-arrow-thin-right"></i>',
              "sPrevious": '<i class="icon dripicons-arrow-thin-left"></i>',
            }
          }
        });

        $('table.data-reports').dataTable({
          "iDisplayLength": 30,
          colReorder: true,
          buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
          ],

          "bLengthChange": false,
          "order": [[ 1, 'desc']],
          "columnDefs": [
                          { "orderable": false, "targets": 0 }
                        ],
          "oLanguage": {
          "sSearch": "",
            "sInfo": "<?=$this->lang->line('application_showing_from_to');?>", 
            "sInfoEmpty": "<?=$this->lang->line('application_showing_from_to_empty');?>",
            "sEmptyTable": "<?=$this->lang->line('application_no_data_yet');?>",
            "oPaginate": {
              "sNext": '<i class="icon dripicons-arrow-thin-right"></i>',
              "sPrevious": '<i class="icon dripicons-arrow-thin-left"></i>',
            }
          }
        });

      });
      
      
      </script>
 </body>
</html>
