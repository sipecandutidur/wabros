<div class="lime-sidebar">
    <div class="lime-sidebar-inner slimscroll">
      <ul class="accordion-menu">
        <li class="sidebar-title">Apps</li>
        <li>
          <a href="dashboard" class="{{ Request::is('dashboard') ? 'active' : '' }}"
            ><i class="material-icons">dashboard</i>Dashboard</a>
        </li>
        <li>
          <a href="dashboard/message"><i class="material-icons {{ Request::is('dashboard/message') ? 'active' : '' }}">podcasts</i>Broadcast</a>
        </li>
        <li>
            <a href="dashboard/contact"><i class="material-icons {{ Request::is('dashboard/contact') ? 'active' : ''  }}">contacts</i>Contact</a>
          </li>
        <li class="sidebar-title">Automation</li>
        <li>
          <a href="#"
            ><i class="material-icons disabled">chat</i>Auto Reply</a
          >
        </li>
        <li>
            <a href="#"
              ><i class="material-icons disabled">tune</i>Custom Rules</a
            >
          </li>
        <li>
          <a href="#"><i class="material-icons disabled">public</i>Whatsapp Web</a>
        </li>
        <li class="sidebar-title">Store</li>
        <li>
          <a href="products"
            ><i class="material-icons">store</i>Products</a
          >
        </li>
        <li>
          <a href="#"
            ><i class="material-icons">list</i>Transaction</a
          >
        </li>
        <li class="sidebar-title">Other</li>
        <li>
          <a href="help"
            ><i class="material-icons">bookmark_border</i>Help Center</a
          >
        </li>
      </ul>
    </div>
  </div>
