<?php 
if($search){
     $this->Paginator->options(['url' => ['search' => $search]]);
}
?>

        <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->


            <!-- =================================================
            ================= CONTROLS Content ===================
            ================================================== -->
            <div id="controls">





                <!-- ================================================
                ================= SIDEBAR Content ===================
                ================================================= -->
                
                <?php echo $this->element('admin/sidebar')?>



            </div>
            <!--/ CONTROLS Content -->




            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
<section id="content">

<div class="page page-dashboard">
    <div class="pageheader">

        <h2><?php echo __('Dashboard');?> <span><?php echo __('// Get consumer &amp; market insight');?></span></h2>

        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                  <a href="index.html"><i class="fa fa-home"></i><?php echo __('KINGFISHER');?></a>
                </li>
                <li>
                   <?php echo __('Dashboard');?>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Start: Top Product Table -->   
<div class="row">
    <div class="col-md-12">
        <section class="tile">
            <div class="tile-header dvd dvd-btm">
                <h1 class="custom-font"><strong>Top</strong>Products</h1>
                <ul class="controls">
                    <li class="dropdown">

                        <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                            <i class="fa fa-spinner fa-spin"></i>
                        </a>

                        <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                            <li>
                                <a role="button" tabindex="0" class="tile-toggle">
                                    <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                    <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                </a>
                            </li>
                            <li>
                                <a role="button" tabindex="0" class="tile-refresh">
                                    <i class="fa fa-refresh"></i> Refresh                </a>
                            </li>
                            <li>
                                <a role="button" tabindex="0" class="tile-fullscreen">
                                    <i class="fa fa-expand"></i> Fullscreen                </a>
                            </li>
                        </ul>

                    </li>
                    
                </ul>

            </div>
                            <!-- tile widget -->
            <div id="product-tile" class="tile-widget">
                  <div class="row">
                    <div class="col-sm-6 ">
                    <div class="shoe-text">show</div>
                        <select class="form-control input-sm page-limit inner-search" aria-controls="basic-usage" name="basic-usage_length">
                              <option value="10">10</option>
                              <option value="25">25</option>
                              <option value="50">50</option>
                              <option value="100">100</option>
                          </select>
                          <div class="entries-text">entries</div>
                    </div>
                   <div class="col-sm-6">
                       <div class="collection-search">
                            <div class="input-group ">
                            <form method="post" action="<?=HTTP_ROOT?>/admin/messages/index">
                                <input type="text" class="input-sm form-control search-text" placeholder="Search..." name="searchVal">
                                <input type="submit" value="Submit" name="search">
                            </form>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
                            
            <div id="top-product">
                <div class="tile-body p-0">
                    <div class="table-responsive">
                       <table class="table mb-0" id="productList">
                         <thead>
                           <tr class="product-header">
                            <th class="sorting sort-heading"><?= $this->Paginator->sort('date', 'Date');?></th>
                            <th class="sorting"><?= $this->Paginator->sort('title', 'Title');?></th>
                            <th class="sorting"><?= $this->Paginator->sort('content', 'Content');?></th>
                            <th class="sorting"><?= $this->Paginator->sort('quantity', 'Quantity');?></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach($msgs as $k=>$v){?>
                                <tr>
                                    <td><?= $v->date;?></td>
                                    <td><?= $v->title;?></td>
                                    <td><?= $v->content;?></td>
                                    <td><?= $v->quantity;?></td>             
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tile-footer dvd dvd-top">
                    <div class="row">
                        <div class="col-sm-3">
                            <small class="text-muted">
                              <?php echo __('showing');?> <?=($this->Paginator->params()['page']*$this->Paginator->params()['limit'])-($this->Paginator->params()['limit']-1)?>-<?=($this->Paginator->params()['page']-1)*$this->Paginator->params()['limit']+$this->Paginator->params()['current']?><?php echo __('of');?><?=$this->Paginator->params()['count']?> <?php echo __('items');?>
                            </small>
                        </div>
                        <div id="pro-pages" style="float:right;" class="col-sm-4 text-right">
                        <ul class="pagination pagination-sm m-0">
                            <?php
                                echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                                echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                                echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                            ?>
                        </ul>
                       </div>
                    </div>
                </div>    
            </div>   
       </section>
    </div>
</div>         

</section>
            <!--/ CONTENT -->






     
        <!--/ Application Content -->






<style type="text/css">
  .shoe-text {
  float: left;
  width: 9%;
   padding-top: 5px;
}
.form-control.input-sm.page-limit.inner-search{
  float: left;
  width: 15%;
}
.entries-text {
  float: left;
  padding-left: 10px;
  width: 26%;
  padding-top: 5px;
}
.collection-search {
  float: right;
  text-align: right;
}

.caret.down-caret {
  transform: rotate(180deg);
}
.caret.up-caret {
  transform: rotate(0deg);
}


.caret.down-caret {
  transform: rotate(180deg);
}
.caret.up-caret {
  transform: rotate(0deg);
}

table#productList .product-header &gt; th {
  width: 25%;
}    
</style>






        







     

   

