<?php

function register_my_menus() {
  register_nav_menus([
    'mobiel_menu_een' => __('Mobiel Menu L1', 'imaga'),
    'mobiel_menu_twee' => __('Mobiel Menu L2', 'imaga'),
    'mobiel_menu_drie' => __('Mobiel Menu L3', 'imaga'),
  ]);
}
add_action( 'init', 'register_my_menus' );

// I know, this is a really big mess.. BUT IT WERKS - Steef Jarbs
add_shortcode('off_canvas_menu', function(){

  $locations = get_nav_menu_locations();

  $menu_l1 = wp_get_nav_menu_object( $locations['mobiel_menu_een'] );
  $menu_items_l1 = wp_get_nav_menu_items( $menu_l1->term_id );

  $menu_l2 = wp_get_nav_menu_object( $locations['mobiel_menu_twee'] );
  $menu_items_l2 = wp_get_nav_menu_items( $menu_l2->term_id );

  $menu_l3 = wp_get_nav_menu_object( $locations['mobiel_menu_drie'] );
  $menu_items_l3 = wp_get_nav_menu_items( $menu_l3->term_id );

  $online_boeken = __('Online Boeken', 'jitty-plugin');
  $telefonisch_afspreken = __('Telefonisch afspreken', 'jitty-plugin');

  $return = '<div class="off-canvas-menu-l1">';

  foreach ( (array) $menu_items_l1 as $key => $menu_item ):
    foreach( (array) $menu_item->classes as $class):
      $classes .= ' '.$class;
    endforeach;
    $return .= '<a class="menu-item '.$class.'" href="'.$menu_item->url.'">'.$menu_item->title.'</a>';
  endforeach;

  $return .= '</div>';

  $return .= '<div class="short-seperator"></div>';

  $return .= '<div class="off-canvas-menu-l2">';

  foreach ( (array) $menu_items_l2 as $key => $menu_item ):
    foreach( (array) $menu_item->classes as $class):
      $classes .= ' '.$class;
    endforeach;
    $return .= '<a class="menu-item '.$class.'" href="'.$menu_item->url.'">'.$menu_item->title.'</a>';
  endforeach;

  $return .= '</div>';

  $return .= '<div class="short-seperator"></div>';

  $return .= '<div class="off-canvas-menu-l2">';

  foreach ( (array) $menu_items_l3 as $key => $menu_item ):
    foreach( (array) $menu_item->classes as $class):
      $classes .= ' '.$class;
    endforeach;
    $return .= '<a class="menu-item '.$class.'" href="'.$menu_item->url.'">'.$menu_item->title.'</a>';
  endforeach;

  $return .= '</div>';

  $return .= '<div class="long-seperator"></div>';

  return <<<HTML
  <a class="x-anchor x-anchor-button jitty-button-orange jb" tabindex="0" href="#" style="outline: currentcolor none medium;">
    <span class="x-anchor-content">
      <span class="x-graphic" aria-hidden="true">
        <span class="x-image x-graphic-image x-graphic-primary">
          <img alt="Image" src="/wp-content/uploads/2018/11/calendar-white.png" width="21" height="21">
        </span>
        <span class="x-image x-graphic-image x-graphic-secondary">
          <img alt="Image" src="/wp-content/uploads/2018/11/calendar-orange.png" width="21" height="21">
        </span>
      </span>
      <span class="x-anchor-text"><span class="x-anchor-text-primary">
        {$online_boeken}
      </span>
      </span>
    </span>
  </a>
  <a class="x-anchor x-anchor-button jitty-button-black" tabindex="0" href="#" style="outline: currentcolor none medium;">
    <span class="x-anchor-content">
      <span class="x-graphic" aria-hidden="true">
        <span class="x-image x-graphic-image x-graphic-primary">
          <img alt="Image" src="/wp-content/uploads/2018/11/telefoon-klein.png" width="21" height="21">
        </span>
        <span class="x-image x-graphic-image x-graphic-secondary">
          <img alt="Image" src="/wp-content/uploads/2018/11/icon-phone.png" width="21" height="21">
        </span>
      </span>
      <span class="x-anchor-text">
        <span class="x-anchor-text-primary">{$telefonisch_afspreken}</span>
      </span>
    </span>
  </a>
  {$return}
  <div class="off-canvas-adres">
    <div class="logo"><img src=" data:image/png;base64,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UU1tUPIu/JrG0WNRVeWQNKiHudv3wSRXn+ed/PPks/bx+2qSQQhO+U85FfzXQASZDUBAhA7YJ0IY4gYzoXpuK0jX+mM3KGk+rWjuG6cDB1IVJ284PekpaEt21dEDya5fNnKxBCeexPv3UexHe+KOfiqdAiRRu8lhYOzZZuJ/tDcx0zNIFUp53Ct0R/mRDKSnJqm1GVC0Gaihz6INIJBs3p1dLH006jkX9XQgsPJbA3X9E1pAQ4NuZY0yISg1RGglfurKGW9l8IQeIYTc6Hpojh94Ktevu2tO+fl67kTZuXOaqWGUOKZabV0dRqo/35U3mkuJTb2Da1L1cE5mhfXMAknQLg9gaDKuNtmqMdIkg4H139pbktO9S2c0SVr/BEDkwtJvXPhf6d8XUlBDqEoAAAJGUExURUxpce97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AO97AA7nSU0AAADBdFJOUwAHnVTQ/esggAH+CvoY/LPwvqQW7CTxUGBwBqC3uyMRAm+G9FvK+aGq2F5Hj/scmLUx7rJJa5zJfbqugyED31Ph+FcuvA913AXnxOoTWqg7jOi45oSiv2JkEhsUyCoead5yOEBRx7CRcVxhBIpWIon1T4ebLOWx9yVB78UtTBnZ7Ql4wIJjpqsLFYtNkOKp0p5/rdt+iLZZfBqvZtcn0Vgzo0UvQynDk1XyS0K0uek6EA1ddswy1nrUPMLV85lqjl8BFOCpAAAE3klEQVRYw72Z93/TOBiHFYekSZpJm9E903TRtNCmUChtKaOLTsos0ELLOsYBxzz2Dbi99x6M23tP/Wdnx479ypYT2/rk3h8SzSeOpVfS+xVCuayoczO3scnpwBg7nE0buc2dRYjNNtm5LVhrWzj7JqtI24ZAA9azhsAGmwVm2/FinN2Kj7eZZBaUrcC5bUXZOhPMqlYvNmbe1iqj0GYnNm7OZkNM3+vYnJX7ckNbnNisOVtyMN2rPdi8eVa7s0FLl2NrtrxUH1q4ht5n/fThhZg9ao8tHJ5eT2+yplAXup0217mj5Gj4jnI0/9iug7WFtC+s5/QQpeXQ6R7t6w9RPdjdqJniqbDuywqnNI5ymzZktepW7ZVZp0tlu7pDrbaRXdVkKppzakenVH3smuUkQjao8BlxwwqyU6SArK8eIeu3VRvy7uptZLcRslsNUemIGV7eYg6iZw2s211HQOtNrJr1BLZuN6giHfWYquO9ZWq7BGqPka6rVHQQFWvVj9MfDAYH5OrP+NznsHot0btDLg8Qo99L+6Muub5AXdVLzIRApngQls7Qd/ssVFQ0AwGDUmkCFvYh01TUBwEJsWzXAHRTZIGKoPMO7NLMVf9JS9STfs2cnQMlZcgSFZUBxpxQsA8+atgiNQwfdh9fsB/kVyGLVLQKUPar8nbLVDv5bO6VSnalzTLVBjFutBf8yDiyTEXjgLMXbQW5nQzUnYCzldiuKhmolcQGBnbWCGKgIrBFNaJuJRNnosYVUDfqVzKzTNRZBdSPHlYyk0zUSbDPIPCSXUxUFyBBagkTteR/pb7ERH0VbP1wtJ5mor6mgIJwZn3ERD0IzuaiF4Qc7F6AHpObPCp6bEm98HmZjToBttlacfTTp7AwExVNS+G4yyauhF0IPfCyrYS8HRDDjvf4ZHrV/oBPfBqERy8rVOFkVRxLRwfpHeZjIXV3PmJjo3Z4ZveA3VE8yFUF+tio6BE5JezcUpDv/sQA1ZeDJxp/yriR+0gtU/0PUU8ZSXXJHF7Sp30nBZJnMtTr1GbJCnVJDeb0mIs/Y7x0QEjdz1BfpLW76H8XBDbSSXOHXiSBHX/cwA3f8MkvM9RnaA3fxsOZ5DVOmgaJi+mvsbfUQfDor7ca//mLd2vk/lqCnqMJAYsYX5DGuyuSyGzl4tc7OP7mIGz8E771579d3HXPTcltRC/U2J5zwkKdPsu3Kyd4yc6mF7FnL8mh85Wm8RRCf3fz1Mx5J06ZAe5yLFG/GAbRhmTvqyOj0niiaYxfKJbktXOUpoqJUSef6PITkZGoZMgHW3nwvv/FG1nm8U6Eh8WK4SsU6BPSVtWbVEVxquVRiTgPXv092P3boqSIhNr0I84LtvOaiFOwI9To+NrEwo9i4QsnaFrFDimMrQtpo2PBniSizgzh2x9GLuO6+a9cH1JVlTNZI3neXiFlujED8XZReXbVAaE7KtVn6mpuhWRGpZBQFtLH1eJMT3Y1J3zIgJqD3M9rlKek/gq9LqmRfRupYmFphUb58r/cQovrhzp7HAZVMt4PQhSlbvSsnRy4p05wo5R2oUKz6uP8+cmSN6LRaPOR1kPPmVUf86SU5knVzZMCLch05XlQy/Ok7OfrFiJPNybp251TOW93Tpm93cnXTZR0a5ai3pqlrN+aMdzw/QcIqdu6Rux+mgAAAABJRU5ErkJggg==" alt="Jitty's Hair & Make-up"></div>
    <div class="adres">
      <div>Jitty's Hair and Make-up</div>
      <div>Bilderdijkstraat 156</div>
      <div>1053LC Amsterdam</div>
    </div>
  </div>
  <div class="off-canvas-socials">
    <a class="social-icon facebook" href="https://www.facebook.com/JittysHairandMakeup" target="_blank">Facebook</a>
    <a class="social-icon twitter" href="https://twitter.com/jittys" target="_blank">Twitter</a>
    <a class="social-icon instagram" href="https://www.instagram.com/jittyshairandmakeup/" target="_blank">Instagram</a>
    <a class="social-icon youtube" href="https://www.youtube.com/user/Vanavondnaardekapper" target="_blank">YouTube</a>
    <a class="social-icon email" href="https://nl.pinterest.com/JittysAmsterdam/" target="_blank">E-mail</a>
    <a class="social-icon pinterest" href="https://nl.pinterest.com/JittysAmsterdam/" target="_blank">Pinterest</a>
  </div>
HTML;

});
