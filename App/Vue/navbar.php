<?php ob_start() ?>

  <!-- Header -->
  <header>
        <img src="Public/asset/images/Logo.svg" alt="Logo Nekotaku" id="logo"/>
        <h1 class="headTitle">Nekotaku</h1>
    </header>


    <!-- Navigation -->
    <nav>
      <div class="menu">
      <ul>
        <li>
          <a href="/nekotaku/" class="link">Accueil</a>
        </li>
        <li>
          <a href="#Librairie" class="link">Librairie</a>
        </li>
        <li>
          <a href="#Questionnaire" class="link">Questionnaire</a>
        </li>
        <li>
          <a href="#Compte" class="link">Compte</a>
        </li>
        <li>
          <a href="/nekotaku/contact" class="link">Contact</a>
        </li>
        <li>
          <input type="search" placeholder="Rechercher..." class="search"/>
        </li>
      </ul>
      </div>
    </nav>
    
<?php $navbar = ob_get_clean() ?>