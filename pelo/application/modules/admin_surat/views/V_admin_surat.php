
                    <div id="page-head">

  <!--Page Title-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <div id="page-title">
    <h1 style="margin-top: -20px; margin-left: -20px" class="page-header text-overflow">Pesan</h1>
  </div>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End page title-->


  <!--Breadcrumb-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <ol style="margin-bottom: 20px; margin-left: -20px" class="breadcrumb">
    <li><a href="index.html"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg></i></a></li>
    <li class="active">Kotak Surat</li>
  </ol>
   <input style="margin-bottom: 10px; margin-left: 10px;" class="btn btn-purple" class="form-control" type="button" value="Kembali" onclick="history.back(-1)" />
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End breadcrumb-->

</div>
              <!-- MAIL INBOX -->
              <!--===================================================-->
              <div class="panel">
                  <div class="panel-body">
                      <div class="fixed-fluid">
                          <div class="fixed-sm-200 pull-sm-left fixed-right-border">
          
                              <div class="pad-btm bord-btm">
                                  <a href="mailbox-compose.html" class="btn btn-block btn-success">Compose Mail</a>
                              </div>
          
                              <p class="pad-hor mar-top text-main text-bold text-sm text-uppercase">Folders</p>
                              <div class="list-group bg-trans pad-btm bord-btm">
                                  <a href="#" class="list-group-item mail-nav-unread">
                                      <i class="demo-pli-mail-unread icon-lg icon-fw"></i> Inbox (73)
                                  </a>
                                  <a href="#" class="list-group-item">
                                      <i class="demo-pli-pen-5 icon-lg icon-fw"></i> Draft
                                  </a>
                                  <a href="#" class="list-group-item">
                                      <i class="demo-pli-mail-send icon-lg icon-fw"></i> Sent
                                  </a>
                                  <a href="#" class="list-group-item mail-nav-unread">
                                      <i class="demo-pli-fire-flame-2 icon-lg icon-fw"></i> Spam (5)
                                  </a>
                                  <a href="#" class="list-group-item">
                                      <i class="demo-pli-trash icon-lg icon-fw"></i> Trash
                                  </a>
                              </div>
          
                              
          
                              <!-- Friends -->
                              
          
                              <p class="pad-hor mar-top text-main text-bold text-sm text-uppercase">Labels</p>
                              <ul class="list-inline mar-hor">
                                  <li class="tag tag-xs">
                                      <a href="#"><i class="demo-pli-tag"></i> Family</a>
                                  </li>
                                  <li class="tag tag-xs">
                                      <a href="#"><i class="demo-pli-tag"></i> Home</a>
                                  </li>
                                  <li class="tag tag-xs">
                                      <a href="#"><i class="demo-pli-tag"></i> Work</a>
                                  </li>
                                  <li class="tag tag-xs">
                                      <a href="#"><i class="demo-pli-tag"></i> Film</a>
                                  </li>
                                  <li class="tag tag-xs">
                                      <a href="#"><i class="demo-pli-tag"></i> Music</a>
                                  </li>
                                  <li class="tag tag-xs">
                                      <a href="#"><i class="demo-pli-tag"></i> Photography</a>
                                  </li>
                              </ul>
          
                          </div>
                          <div class="fluid">
                              <div id="demo-email-list">
                                  <div class="row">
                                      <div class="col-sm-7 toolbar-left">
          
                                          <!-- Mail toolbar -->
                                          <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
          
                                          <!--Split button dropdowns-->
                                          <div class="btn-group">
                                              <label id="demo-checked-all-mail" for="select-all-mail" class="btn btn-default">
                                          <input id="select-all-mail" class="magic-checkbox" type="checkbox">
                                          <label for="select-all-mail"></label>
                                              </label>
                                              <button data-toggle="dropdown" class="btn btn-default dropdown-toggle"><i class="dropdown-caret"></i></button>
                                              <ul class="dropdown-menu">
                                                  <li><a href="#" id="demo-select-all-list">All</a></li>
                                                  <li><a href="#" id="demo-select-none-list">None</a></li>
                                                  <li><a href="#" id="demo-select-toggle-list">Toggle</a></li>
                                                  <li class="divider"></li>
                                                  <li><a href="#" id="demo-select-read-list">Read</a></li>
                                                  <li><a href="#" id="demo-select-unread-list">Unread</a></li>
                                                  <li><a href="#" id="demo-select-starred-list">Starred</a></li>
                                              </ul>
                                          </div>
          
                                          <!--Refresh button-->
                                          <button id="demo-mail-ref-btn" data-toggle="panel-overlay" data-target="#demo-email-list" class="btn btn-default" type="button">
                                      <i class="demo-psi-repeat-2"></i>
                                  </button>
          
                                          <!--Dropdown button (More Action)-->
                                          <div class="btn-group dropdown">
                                              <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                                          More <i class="dropdown-caret"></i>
                                      </button>
                                              <ul class="dropdown-menu">
                                                  <li><a href="#">Mark as read</a></li>
                                                  <li><a href="#">Mark as unread</a></li>
                                                  <li class="divider"></li>
                                                  <li><a href="#">Star</a></li>
                                                  <li><a href="#">Clear Star</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                      <div class="col-sm-5 toolbar-right">
                                          <!--Pager buttons-->
                                          <span class="text-main">
                                          <strong>1-50</strong>
                                          of
                                          <strong>160</strong>
                                      </span>
                                          <div class="btn-group btn-group">
                                              <button class="btn btn-default" type="button">
                                              <i class="demo-psi-arrow-left"></i>
                                          </button>
                                              <button class="btn btn-default" type="button">
                                              <i class="demo-psi-arrow-right"></i>
                                          </button>
                                          </div>
                                      </div>
                                  </div>
          
                                  <!--Mail list group-->
                                  <ul id="demo-mail-list" class="mail-list pad-top bord-top">
                                    <?php
                                    foreach ($tampil as $e) {?>
                                     <li class="mail-list-unread mail-attach">
                                          <div class="mail-control">
                                              <input id="email-list-1" class="magic-checkbox" type="checkbox">
                                              <label for="email-list-1"></label>
                                          </div>
                                          <?php 
                                        $date = date('d-m-Y', strtotime($e->tanggal));
                                            ?>
                                          <div class="mail-star"><a href="#"><i class="demo-psi-star"></i></a></div>
                                          <div class="mail-from"><a href="<?php echo base_url('admin_surat/detail/'. $e->id_pesan) ?>"><?php echo $e->awal?> <?php echo $e->awal?></a></div>
                                          <div class="mail-time"><?php echo $date?></div>
                                          <div class="mail-attach-icon"></div>
                                          <div class="mail-subject">
                                            <p style="margin-left: 50%"><?php echo $e->judul?></p>
                                          </div>
                                      </li>
                                    <?php }?>
                                  </ul>
                              </div>
          
          
                              <!--Mail footer-->
                              <div class="panel-footer clearfix">
                                  <div class="pull-right">
                                      
                                      
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          
              <!--===================================================-->
              <!-- END OF MAIL INBOX -->
          
              
                