<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= media();?>/images/avatar.png" alt="User Image">
        <div>
        <p class="app-sidebar__user-name"><?= $_SESSION['userData']['nombres'];?></p>
          <p class="app-sidebar__user-designation"><?= $_SESSION['userData']['nombrerol'];?></p>
        </div>
      </div>
      <ul class="app-menu">
        <!-- Modulo de Dashboard -->
        <?php if(!empty($_SESSION['permisos'][1]['r'])){ ?>
          <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/dashboard">
              <i class="app-menu__icon fa fa-dashboard"></i>
              <!-- <i class="app-menu__icon fas fa-tachometer-alt-slow"></i> -->
              <span class="app-menu__label">Dashboard</span>
            </a>
          </li>
        <?php } ?>
        <!-- MOdulo de Usuarios -->
        <?php if(!empty($_SESSION['permisos'][2]['r'])){ ?>
          <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fas fa-users"></i>
            
              <!-- <i class="app-menu__icon fa fa-users" aria-hidden="true"></i> -->
              <span class="app-menu__label">Usuarios</span>
              <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a class="treeview-item" href="<?= base_url(); ?>/usuarios"><i class="icon fa fa-circle-o"></i> Usuarios</a></li>
              <li><a class="treeview-item" href="<?= base_url(); ?>/roles" rel="noopener"><i class="icon fa fa-circle-o"></i> Roles</a></li>
            </ul>
          </li>
        <?php } ?>
        <!-- Modulo de Clientes -->
        <?php if(!empty($_SESSION['permisos'][3]['r'])){ ?>
          <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/clientes">
              <i class="app-menu__icon fas fa-user"></i>
              <span class="app-menu__label">Clientes</span>
            </a>
          </li>
        <?php } ?>
        <!-- Modulo de Tienda -->
        <?php if(!empty($_SESSION['permisos'][4]['r']) || !empty($_SESSION['permisos'][6]['r'])){ ?>
          <li class="treeview">
              <a class="app-menu__item" href="#" data-toggle="treeview">
                  <i class="app-menu__icon fa fa-archive" aria-hidden="true"></i>
                  <span class="app-menu__label">Tienda</span>
                  <i class="treeview-indicator fa fa-angle-right"></i>
              </a>
              <ul class="treeview-menu">
                  <!-- Modulo de Categorias -->
                  <?php if(!empty($_SESSION['permisos'][6]['r'])){ ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/categorias"><i class="icon fa fa-circle-o"></i> Categorías</a></li>
                  <?php } ?>
                  <!-- Modulo de productos -->
                  <?php if(!empty($_SESSION['permisos'][4]['r'])){ ?>
                    <li><a class="treeview-item" href="<?= base_url(); ?>/productos"><i class="icon fa fa-circle-o"></i> Productos</a></li>
                  <?php } ?>
              </ul>
          </li>
        <?php } ?>
        <!-- MOdulo de pedidos -->
        <?php if(!empty($_SESSION['permisos'][5]['r'])){ ?>
          <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/pedidos">
              <!-- <i class="app-menu__icon fa fa-shopping-cart" aria-hidden="true"></i> -->
              <i class="app-menu__icon fas fa-shopping-cart"></i>
              <span class="app-menu__label">Pedidos</span>
            </a>
          </li>
        <?php } ?>
        <!-- MOdulo para cerrar sesion -->
        <li>
          <a class="app-menu__item" href="<?= base_url(); ?>/logout">
            <i class="app-menu__icon fas fa-sign-out-alt" ></i>
            <!-- <i class="app-menu__iconfa fas fa-sign-out-alt"></i> -->
            <span class="app-menu__label">Logout</span>
          </a>
        </li>

      </ul>
    </aside>