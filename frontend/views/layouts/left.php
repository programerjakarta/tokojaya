<?php
use yii\bootstrap\Nav;

?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Arif Rachman</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        

        <ul class="sidebar-menu">
        <li class="header">Menu</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span> Data</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= \yii\helpers\Url::to(['/kategoribarang']) ?>"><span class="fa fa-dropbox"></span> Kategori Barang</a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['/barang']) ?>"><span class="fa fa-dropbox"></span> Stok Barang</a>
                    </li>
                    <li><a href="<?= \yii\helpers\Url::to(['/pelanggan']) ?>"><span class="fa fa-users"></span> Pelanggan</a></li>
                    <li><a href="<?= \yii\helpers\Url::to(['/suplier']) ?>"><span class="fa fa-truck"></span> Supplier</a></li>
                </ul>
            </li>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i> <span> Penjualan</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= \yii\helpers\Url::to(['/penjualan']) ?>"><span class="fa fa-shopping-cart"></span> Penjualan</a></li>
                </ul>
            </li>
        </ul>
    </section>

</aside>
