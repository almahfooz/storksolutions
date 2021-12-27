<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'homepage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.service',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/work' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.work',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.faq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/request-quote' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.request.quote',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.quote.message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/team' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.team',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.langchange',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact-message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.contact.message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subscribe-newsletter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.subscribe.newsletter',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/place-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.order.message',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AcVildPxSgoyEoNU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/admin/forget-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.forget.password',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DXxVhlzh3zbKbKqk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/admin/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reset.password.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-variant' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home.variant',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ALqc5BhPKsvhNPv8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/navbar-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.navbar.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p5zQwm7A7pc5bxaJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/blog-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JcoUmOHz8tcZXRu9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/counterup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.counterup',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8hbFV9BA95nnJEkI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/update-counterup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.counterup.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/testimonial' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.testimonial',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wXLNv3YRwDdKAr1E',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/update-testimonial' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.testimonial.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/keyfeatures' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.keyfeatures',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ssg1cdZDcuI3W1CQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/update-keyfeatures' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.keyfeatures.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/contact-page/contact-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.info',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jnTN2DFedABK2rhQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/contact-page/contact-info/title' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.info.title',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/contact-page/contact-info/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.info.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.services',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gbpSNul2h3yGnfCL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/services-cat-by-slug' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.service.category.by.slug',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/update-services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.services.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/services/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.service.category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TOBv7Mr7mxBOcavg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/update-services-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.service.category.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/works' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.work',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GxXPishQt1OA9dSJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/update-works' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.work.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/works-cat-by-slug' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.work.category.by.slug',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/works/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.work.category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PRedRAl8WiVf3k1D',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/update-works-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.work.category.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/brands' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brands',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Uxb0jkkp0RCoCam4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/update-brands' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brands.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dQersxHNzCqgljM4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/update-faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/header' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.header',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lIkKfsaGqAYUKguj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/update-header' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.header.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/galleries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.galleries',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j9HsEJuV1THxWOY5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/update-galleries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.galleries.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/price-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.price.plan',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VbL77QdWW8W6FPyK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/update-price-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.price.plan.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/team-member' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.team.member',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vRJCcXYWGibg4FpL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/update-team-member' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.team.member.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page-01/counterup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.counterup',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lUACzb81XCUdMFzR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page-01/latest-news' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.latest.news',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nTN87x8jlR1nKs4R',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page-01/testimonial' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.testimonial',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Nzjh1iNmfcC8lIza',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page-01/service-area' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.service.area',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8GKfFyO6vq35r2y9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page-01/recent-work' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.recent.work',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Did6nGLQ1vA1lwjw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page-01/build-dream' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.build.dream',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yLSxukmEjXWrDrjq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page-01/newsletter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.newsletter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pubxQ9geA3axF3DG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page-01/section-manage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.section.manage',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zpIRyvssZOG2hKCO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page-01/price-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.price.plan',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6ysnN6TSMDVJFqNn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/home-page-01/team-member' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.homeone.team.member',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JPsnnL4dzUkHqHnW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/about-page/about-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.about.page.about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XJQbfiWGCWxGGjoV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/about-page/team-member' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.about.team.member',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wn4Pgyp2qetvTALl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/service-page/price-plan' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.service.page.price.plan',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zwnBq8wM7IkChiVK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/service-page/cta' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.service.page.cta',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LU3uhCZnbQgwS5p3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/team-page/about-team' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.team.page.about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::29CmaCzJEt3hoBHP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/team-page/team-member' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.team.page.team.member',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xYZDl8bDiSCR3KkO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/contact-page/form-area' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.page.form.area',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RLvMFsXPgfMqmm7e',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/contact-page/map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.page.map',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CHZ8gYxFBVoLR48T',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/footer/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.footer.about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6FzjQnviYyOil3ky',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/footer/general' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.footer.general',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8Oh5iCZvdEwTTLL1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/footer/useful-links' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.footer.useful.link',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ijSII4fMOx9yIVzI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/footer/useful-links/widget' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.footer.useful.link.widget',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/footer/useful-links/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.footer.useful.link.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/footer/useful-links/menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.footer.useful.link.menus',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/footer/recent-post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.footer.recent.post',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pTvVgGMD2m9x7bhv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/footer/important-links' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.footer.important.link',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cYq9TGG2hhWfE4fb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/footer/important-links/widget' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.footer.important.link.widget',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/footer/important-links/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.footer.important.link.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/footer/important-links/slug' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.footer.important.link.menu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/newsletter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/newsletter/single' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.single.mail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/newsletter/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.mail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GjDjHjbrckifEuaj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/quote-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.quote.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::teQhBoCn6U2qDgTE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/order-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.order.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::38nZ8sqOmt9cOJom',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/topbar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.topbar',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/topbar/new-support-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.new.support.info',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/topbar/update-support-info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update.support.info',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/topbar/new-social-item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.new.social.item',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/topbar/update-social-item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.update.social.item',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/new-menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu.new',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/new-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aUsCLn0Dj06ULs6t',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/new-blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q8vCElsGTjUoIqc4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/blog-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XZoJY0MfLNBG0G8I',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/update-blog-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.category.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/blog-lang-by-cat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.lang.cat',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/new-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.new.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SGD5xbvpKVHlktD0',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/user-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/user-password-chnage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.password.change',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/all-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.all.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/profile-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qbK1e0TcpZHUvQOv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/password-change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.password.change',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JabVjlEZsApveaqC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/site-identity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.site.identity',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PRyUm8mmyaJSqZEG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/basic-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.basic.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fe8AcPki34YQSNdT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/seo-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.seo.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OMk1KXsGYvOihiTt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/scripts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.scripts.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8xbdM7NcO6fNzrvM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/email-template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.email.template',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vYBy2wi6zWIyR3Wt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/typography-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.typography.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qFe4W5HegJdbtIb6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/cache-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.cache.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8B2JVnIH7XAG4g2f',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/backup-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.backup.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m4kZXIXnFGmW7udK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/backup-settings/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.backup.settings.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/backup-settings/restore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.backup.settings.restore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/update-system' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.update.system',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iyBzcOvAzijt3hbw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/license-setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.license.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ps3s4JvMsJCfJYyW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/general-settings/custom-css' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.general.custom.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oLpTmuo4eVbCEhfR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/languages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/languages/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.new',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/languages/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin-home/courses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.courses.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.courses.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g7T0yq2L1hwwEPBo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/p(?|/([^/]++)/([^/]++)(*:30)|lan\\-order/([^/]++)(*:56))|/blog/(?|([^/]++)/([^/]++)(*:90)|category/([^/]++)/([^/]++)(*:123))|/s(?|ervices/(?|([^/]++)/([^/]++)(*:165)|category/([^/]++)/([^/]++)(*:199))|tudents/([^/]++)/certificates/show(*:242))|/work/([^/]++)/([^/]++)(*:274)|/home/([^/]++)(*:296)|/login/admin/reset\\-password/([^/]++)/([^/]++)(*:350)|/admin\\-home/(?|delete\\-(?|counterup/([^/]++)(*:403)|te(?|stimonial/([^/]++)(*:434)|am\\-member/([^/]++)(*:461))|keyfeatures/([^/]++)(*:490)|services(?|/([^/]++)(*:518)|\\-category/([^/]++)(*:545))|works(?|/([^/]++)(*:571)|\\-category/([^/]++)(*:598))|b(?|rands/([^/]++)(*:625)|log\\-category/([^/]++)(*:655))|faq/([^/]++)(*:676)|header/([^/]++)(*:699)|galleries/([^/]++)(*:725)|price\\-plan/([^/]++)(*:753)|user/([^/]++)(*:774))|co(?|ntact\\-page/contact\\-info/delete/([^/]++)(*:829)|urses/([^/]++)(?|(*:854)|/(?|students/(?|add(*:881)|import(*:895))|certificates/(?|generate(*:928)|download(*:944)))))|footer/(?|useful\\-links/update/([^/]++)(*:995)|important\\-links/update/([^/]++)(*:1035))|newsletter/delete/([^/]++)(*:1071)|topbar/delete\\-s(?|upport\\-info/([^/]++)(*:1120)|ocial\\-item/([^/]++)(*:1149))|menu\\-(?|edit/([^/]++)(*:1181)|update/([^/]++)(*:1205)|de(?|lete/([^/]++)(*:1232)|fault/([^/]++)(*:1255)))|page\\-(?|edit/([^/]++)(*:1288)|update/([^/]++)(*:1312)|delete/([^/]++)(*:1336))|blog\\-(?|edit/([^/]++)(*:1368)|update/([^/]++)(*:1392)|delete/([^/]++)(*:1416))|languages/(?|words/(?|edit/([^/]++)(*:1461)|update/([^/]++)(*:1485))|de(?|lete/([^/]++)(*:1513)|fault/([^/]++)(*:1536)))|students/(?|([^/]++)(*:1567)|delete(*:1582)|([^/]++)/certificates/show(*:1617))))/?$}sDu',
    ),
    3 => 
    array (
      30 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.dynamic.page',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'any',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      56 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.plan.order',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      90 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog.single',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'any',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      123 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.blog.category',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'any',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      165 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.services.single',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'any',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      199 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.services.category',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'any',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      242 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'students.certificates.show',
          ),
          1 => 
          array (
            0 => 'student',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      274 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'frontend.work.single',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'any',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EHPMbnlqJHSR6Uy3',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      350 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.reset.password',
          ),
          1 => 
          array (
            0 => 'user',
            1 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      403 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.counterup.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      434 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.testimonial.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      461 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.team.member.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      490 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.keyfeatures.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      518 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.services.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      545 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.service.category.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      571 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.work.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      598 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.work.category.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      625 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.brands.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      655 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.category.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      676 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faq.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      699 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.header.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      725 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.galleries.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      753 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.price.plan.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      774 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delete.user',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      829 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.contact.info.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      854 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.courses.show',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.courses.update',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.courses.destroy',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      881 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.courses.students.add',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      895 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.courses.students.import',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      928 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.students.certificates.generate',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      944 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.students.certificates.download',
          ),
          1 => 
          array (
            0 => 'course',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      995 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.footer.useful.link.delete',
          ),
          1 => 
          array (
            0 => 'delete',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1035 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.footer.important.link.delete',
          ),
          1 => 
          array (
            0 => 'delete',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1071 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.newsletter.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1120 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delete.support.info',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.delete.social.item',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1181 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1232 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1255 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.menu.default',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1288 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1312 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1336 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.page.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1368 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1392 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1416 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blog.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1461 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.words.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.words.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1513 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1536 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.languages.default',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1567 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.students.update',
          ),
          1 => 
          array (
            0 => 'student',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1582 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.students.destroy',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1617 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.students.certificates.show',
          ),
          1 => 
          array (
            0 => 'student',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'homepage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@index',
        'controller' => 'App\\Http\\Controllers\\FrontendController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'homepage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.dynamic.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'p/{id}/{any}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@dynamic_single_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@dynamic_single_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.dynamic.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@blog_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@blog_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@about_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@about_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@service_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@service_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.work' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'work',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@work_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@work_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.work',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.faq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@faq_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@faq_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.faq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@contact_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@contact_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.plan.order' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'plan-order/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@plan_order',
        'controller' => 'App\\Http\\Controllers\\FrontendController@plan_order',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.plan.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.request.quote' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'request-quote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@request_quote',
        'controller' => 'App\\Http\\Controllers\\FrontendController@request_quote',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.request.quote',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.team' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@team_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@team_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.team',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{id}/{any}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@blog_single_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@blog_single_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.services.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'services/{id}/{any}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@services_single_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@services_single_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.services.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.work.single' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'work/{id}/{any}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@work_single_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@work_single_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.work.single',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@blog_search_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@blog_search_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.blog.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/category/{id}/{any}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@category_wise_blog_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@category_wise_blog_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.blog.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.services.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'services/category/{id}/{any}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@category_wise_services_page',
        'controller' => 'App\\Http\\Controllers\\FrontendController@category_wise_services_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.services.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'students.certificates.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'students/{student}/certificates/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\StudentController@showCertificate',
        'controller' => 'App\\Http\\Controllers\\StudentController@showCertificate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'students.certificates.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.langchange' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@lang_change',
        'controller' => 'App\\Http\\Controllers\\FrontendController@lang_change',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.langchange',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EHPMbnlqJHSR6Uy3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@home_page_change',
        'controller' => 'App\\Http\\Controllers\\FrontendController@home_page_change',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EHPMbnlqJHSR6Uy3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.contact.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact-message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@send_contact_message',
        'controller' => 'App\\Http\\Controllers\\FrontendController@send_contact_message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.contact.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.subscribe.newsletter' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'subscribe-newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@subscribe_newsletter',
        'controller' => 'App\\Http\\Controllers\\FrontendController@subscribe_newsletter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.subscribe.newsletter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.quote.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'request-quote',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@send_quote_message',
        'controller' => 'App\\Http\\Controllers\\FrontendController@send_quote_message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.quote.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'frontend.order.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'place-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setlang',
          2 => 'globalVariable',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@send_order_message',
        'controller' => 'App\\Http\\Controllers\\FrontendController@send_order_message',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'frontend.order.message',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showAdminLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showAdminLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.forget.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/admin/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@showAdminForgetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\FrontendController@showAdminForgetPasswordForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.forget.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reset.password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/admin/reset-password/{user}/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@showAdminResetPasswordForm',
        'controller' => 'App\\Http\\Controllers\\FrontendController@showAdminResetPasswordForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.reset.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.reset.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/admin/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@AdminResetPassword',
        'controller' => 'App\\Http\\Controllers\\FrontendController@AdminResetPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.reset.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DXxVhlzh3zbKbKqk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/admin/forget-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontendController@sendAdminForgetPasswordMail',
        'controller' => 'App\\Http\\Controllers\\FrontendController@sendAdminForgetPasswordMail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DXxVhlzh3zbKbKqk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@adminLogout',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@adminLogout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AcVildPxSgoyEoNU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@adminLogin',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@adminLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AcVildPxSgoyEoNU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@adminIndex',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@adminIndex',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home.variant' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-variant',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@home_variant',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@home_variant',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.home.variant',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ALqc5BhPKsvhNPv8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-variant',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@update_home_variant',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@update_home_variant',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::ALqc5BhPKsvhNPv8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.navbar.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/navbar-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@navbar_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@navbar_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.navbar.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p5zQwm7A7pc5bxaJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/navbar-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@update_navbar_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@update_navbar_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::p5zQwm7A7pc5bxaJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/blog-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@blog_page',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@blog_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JcoUmOHz8tcZXRu9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@blog_page_update',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@blog_page_update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::JcoUmOHz8tcZXRu9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.counterup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/counterup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CounterUpController@index',
        'controller' => 'App\\Http\\Controllers\\CounterUpController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.counterup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8hbFV9BA95nnJEkI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/counterup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CounterUpController@store',
        'controller' => 'App\\Http\\Controllers\\CounterUpController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::8hbFV9BA95nnJEkI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.counterup.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/update-counterup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CounterUpController@update',
        'controller' => 'App\\Http\\Controllers\\CounterUpController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.counterup.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.counterup.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/delete-counterup/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CounterUpController@delete',
        'controller' => 'App\\Http\\Controllers\\CounterUpController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.counterup.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.testimonial' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/testimonial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TestimonialController@index',
        'controller' => 'App\\Http\\Controllers\\TestimonialController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.testimonial',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wXLNv3YRwDdKAr1E' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/testimonial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TestimonialController@store',
        'controller' => 'App\\Http\\Controllers\\TestimonialController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::wXLNv3YRwDdKAr1E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.testimonial.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/update-testimonial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TestimonialController@update',
        'controller' => 'App\\Http\\Controllers\\TestimonialController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.testimonial.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.testimonial.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/delete-testimonial/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TestimonialController@delete',
        'controller' => 'App\\Http\\Controllers\\TestimonialController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.testimonial.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.keyfeatures' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/keyfeatures',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\KeyFeaturesController@index',
        'controller' => 'App\\Http\\Controllers\\KeyFeaturesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.keyfeatures',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ssg1cdZDcuI3W1CQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/keyfeatures',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\KeyFeaturesController@store',
        'controller' => 'App\\Http\\Controllers\\KeyFeaturesController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::Ssg1cdZDcuI3W1CQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.keyfeatures.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/update-keyfeatures',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\KeyFeaturesController@update',
        'controller' => 'App\\Http\\Controllers\\KeyFeaturesController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.keyfeatures.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.keyfeatures.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/delete-keyfeatures/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\KeyFeaturesController@delete',
        'controller' => 'App\\Http\\Controllers\\KeyFeaturesController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.keyfeatures.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.info' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/contact-page/contact-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactInfoController@index',
        'controller' => 'App\\Http\\Controllers\\ContactInfoController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jnTN2DFedABK2rhQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/contact-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactInfoController@store',
        'controller' => 'App\\Http\\Controllers\\ContactInfoController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::jnTN2DFedABK2rhQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.info.title' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/contact-info/title',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactInfoController@contact_info_title',
        'controller' => 'App\\Http\\Controllers\\ContactInfoController@contact_info_title',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.info.title',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.info.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/contact-info/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactInfoController@update',
        'controller' => 'App\\Http\\Controllers\\ContactInfoController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.info.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.info.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/contact-info/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactInfoController@delete',
        'controller' => 'App\\Http\\Controllers\\ContactInfoController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.info.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.services' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@index',
        'controller' => 'App\\Http\\Controllers\\ServiceController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.services',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gbpSNul2h3yGnfCL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@store',
        'controller' => 'App\\Http\\Controllers\\ServiceController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::gbpSNul2h3yGnfCL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.service.category.by.slug' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/services-cat-by-slug',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@category_by_slug',
        'controller' => 'App\\Http\\Controllers\\ServiceController@category_by_slug',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.service.category.by.slug',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.services.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/update-services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@update',
        'controller' => 'App\\Http\\Controllers\\ServiceController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.services.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.services.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/delete-services/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@delete',
        'controller' => 'App\\Http\\Controllers\\ServiceController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.services.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.service.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/services/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@category_index',
        'controller' => 'App\\Http\\Controllers\\ServiceController@category_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.service.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TOBv7Mr7mxBOcavg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/services/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@category_store',
        'controller' => 'App\\Http\\Controllers\\ServiceController@category_store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::TOBv7Mr7mxBOcavg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.service.category.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/update-services-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@category_update',
        'controller' => 'App\\Http\\Controllers\\ServiceController@category_update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.service.category.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.service.category.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/delete-services-category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@category_delete',
        'controller' => 'App\\Http\\Controllers\\ServiceController@category_delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.service.category.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.work' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/works',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WorksController@index',
        'controller' => 'App\\Http\\Controllers\\WorksController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.work',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GxXPishQt1OA9dSJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/works',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WorksController@store',
        'controller' => 'App\\Http\\Controllers\\WorksController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::GxXPishQt1OA9dSJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.work.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/update-works',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WorksController@update',
        'controller' => 'App\\Http\\Controllers\\WorksController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.work.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.work.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/delete-works/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WorksController@delete',
        'controller' => 'App\\Http\\Controllers\\WorksController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.work.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.work.category.by.slug' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/works-cat-by-slug',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WorksController@category_by_slug',
        'controller' => 'App\\Http\\Controllers\\WorksController@category_by_slug',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.work.category.by.slug',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.work.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/works/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WorksController@category_index',
        'controller' => 'App\\Http\\Controllers\\WorksController@category_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.work.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PRedRAl8WiVf3k1D' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/works/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WorksController@category_store',
        'controller' => 'App\\Http\\Controllers\\WorksController@category_store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::PRedRAl8WiVf3k1D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.work.category.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/update-works-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WorksController@category_update',
        'controller' => 'App\\Http\\Controllers\\WorksController@category_update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.work.category.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.work.category.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/delete-works-category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WorksController@category_delete',
        'controller' => 'App\\Http\\Controllers\\WorksController@category_delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.work.category.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brands' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BrandController@index',
        'controller' => 'App\\Http\\Controllers\\BrandController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.brands',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Uxb0jkkp0RCoCam4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BrandController@store',
        'controller' => 'App\\Http\\Controllers\\BrandController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::Uxb0jkkp0RCoCam4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brands.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/update-brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BrandController@update',
        'controller' => 'App\\Http\\Controllers\\BrandController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.brands.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.brands.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/delete-brands/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BrandController@delete',
        'controller' => 'App\\Http\\Controllers\\BrandController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.brands.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FaqController@index',
        'controller' => 'App\\Http\\Controllers\\FaqController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.faq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dQersxHNzCqgljM4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FaqController@store',
        'controller' => 'App\\Http\\Controllers\\FaqController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::dQersxHNzCqgljM4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/update-faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FaqController@update',
        'controller' => 'App\\Http\\Controllers\\FaqController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.faq.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faq.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/delete-faq/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FaqController@delete',
        'controller' => 'App\\Http\\Controllers\\FaqController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.faq.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.header' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/header',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HeaderSliderController@index',
        'controller' => 'App\\Http\\Controllers\\HeaderSliderController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.header',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lIkKfsaGqAYUKguj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/header',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HeaderSliderController@store',
        'controller' => 'App\\Http\\Controllers\\HeaderSliderController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::lIkKfsaGqAYUKguj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.header.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/update-header',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HeaderSliderController@update',
        'controller' => 'App\\Http\\Controllers\\HeaderSliderController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.header.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.header.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/delete-header/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HeaderSliderController@delete',
        'controller' => 'App\\Http\\Controllers\\HeaderSliderController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.header.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.galleries' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/galleries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\GalleryController@index',
        'controller' => 'App\\Http\\Controllers\\GalleryController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.galleries',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j9HsEJuV1THxWOY5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/galleries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\GalleryController@store',
        'controller' => 'App\\Http\\Controllers\\GalleryController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::j9HsEJuV1THxWOY5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.galleries.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/update-galleries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\GalleryController@update',
        'controller' => 'App\\Http\\Controllers\\GalleryController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.galleries.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.galleries.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/delete-galleries/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\GalleryController@delete',
        'controller' => 'App\\Http\\Controllers\\GalleryController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.galleries.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.price.plan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/price-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PricePlanController@index',
        'controller' => 'App\\Http\\Controllers\\PricePlanController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.price.plan',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VbL77QdWW8W6FPyK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/price-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PricePlanController@store',
        'controller' => 'App\\Http\\Controllers\\PricePlanController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::VbL77QdWW8W6FPyK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.price.plan.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/update-price-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PricePlanController@update',
        'controller' => 'App\\Http\\Controllers\\PricePlanController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.price.plan.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.price.plan.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/delete-price-plan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PricePlanController@delete',
        'controller' => 'App\\Http\\Controllers\\PricePlanController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.price.plan.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.team.member' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/team-member',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamMemberController@index',
        'controller' => 'App\\Http\\Controllers\\TeamMemberController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.team.member',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vRJCcXYWGibg4FpL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/team-member',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamMemberController@store',
        'controller' => 'App\\Http\\Controllers\\TeamMemberController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::vRJCcXYWGibg4FpL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.team.member.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/update-team-member',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamMemberController@update',
        'controller' => 'App\\Http\\Controllers\\TeamMemberController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.team.member.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.team.member.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/delete-team-member/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamMemberController@delete',
        'controller' => 'App\\Http\\Controllers\\TeamMemberController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.team.member.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.counterup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/counterup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@home_01_counterup',
        'controller' => 'App\\Http\\Controllers\\HomePageController@home_01_counterup',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.counterup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lUACzb81XCUdMFzR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/counterup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@home_01_update_counterup',
        'controller' => 'App\\Http\\Controllers\\HomePageController@home_01_update_counterup',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::lUACzb81XCUdMFzR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.latest.news' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/latest-news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@home_01_latest_news',
        'controller' => 'App\\Http\\Controllers\\HomePageController@home_01_latest_news',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.latest.news',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nTN87x8jlR1nKs4R' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/latest-news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@home_01_update_latest_news',
        'controller' => 'App\\Http\\Controllers\\HomePageController@home_01_update_latest_news',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::nTN87x8jlR1nKs4R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.testimonial' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/testimonial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@home_01_testimonial',
        'controller' => 'App\\Http\\Controllers\\HomePageController@home_01_testimonial',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.testimonial',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Nzjh1iNmfcC8lIza' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/testimonial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@home_01_update_testimonial',
        'controller' => 'App\\Http\\Controllers\\HomePageController@home_01_update_testimonial',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::Nzjh1iNmfcC8lIza',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.service.area' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/service-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@home_01_service_area',
        'controller' => 'App\\Http\\Controllers\\HomePageController@home_01_service_area',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.service.area',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8GKfFyO6vq35r2y9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/service-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@home_01_update_service_area',
        'controller' => 'App\\Http\\Controllers\\HomePageController@home_01_update_service_area',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::8GKfFyO6vq35r2y9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.recent.work' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/recent-work',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@home_01_recent_work',
        'controller' => 'App\\Http\\Controllers\\HomePageController@home_01_recent_work',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.recent.work',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Did6nGLQ1vA1lwjw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/recent-work',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@home_01_update_recent_work',
        'controller' => 'App\\Http\\Controllers\\HomePageController@home_01_update_recent_work',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::Did6nGLQ1vA1lwjw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.build.dream' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/build-dream',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@home_01_build_dream',
        'controller' => 'App\\Http\\Controllers\\HomePageController@home_01_build_dream',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.build.dream',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yLSxukmEjXWrDrjq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/build-dream',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@home_01_update_build_dream',
        'controller' => 'App\\Http\\Controllers\\HomePageController@home_01_update_build_dream',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::yLSxukmEjXWrDrjq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.newsletter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@home_01_newsletter',
        'controller' => 'App\\Http\\Controllers\\HomePageController@home_01_newsletter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.newsletter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pubxQ9geA3axF3DG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@home_01_update_newsletter',
        'controller' => 'App\\Http\\Controllers\\HomePageController@home_01_update_newsletter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::pubxQ9geA3axF3DG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.section.manage' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/section-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@home_01_section_manage',
        'controller' => 'App\\Http\\Controllers\\HomePageController@home_01_section_manage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.section.manage',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zpIRyvssZOG2hKCO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/section-manage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@home_01_update_section_manage',
        'controller' => 'App\\Http\\Controllers\\HomePageController@home_01_update_section_manage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::zpIRyvssZOG2hKCO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.price.plan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/price-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@home_01_price_plan',
        'controller' => 'App\\Http\\Controllers\\HomePageController@home_01_price_plan',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.price.plan',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6ysnN6TSMDVJFqNn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/price-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@home_01_update_price_plan',
        'controller' => 'App\\Http\\Controllers\\HomePageController@home_01_update_price_plan',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::6ysnN6TSMDVJFqNn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.homeone.team.member' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/home-page-01/team-member',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@home_01_team_member',
        'controller' => 'App\\Http\\Controllers\\HomePageController@home_01_team_member',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.homeone.team.member',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JPsnnL4dzUkHqHnW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/home-page-01/team-member',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomePageController@home_01_update_team_member',
        'controller' => 'App\\Http\\Controllers\\HomePageController@home_01_update_team_member',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::JPsnnL4dzUkHqHnW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.about.page.about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/about-page/about-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AboutPageController@about_page_about_section',
        'controller' => 'App\\Http\\Controllers\\AboutPageController@about_page_about_section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.about.page.about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XJQbfiWGCWxGGjoV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/about-page/about-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AboutPageController@about_page_update_about_section',
        'controller' => 'App\\Http\\Controllers\\AboutPageController@about_page_update_about_section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::XJQbfiWGCWxGGjoV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.about.team.member' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/about-page/team-member',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AboutPageController@about_page_team_member_section',
        'controller' => 'App\\Http\\Controllers\\AboutPageController@about_page_team_member_section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.about.team.member',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wn4Pgyp2qetvTALl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/about-page/team-member',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AboutPageController@about_page_update_team_member_section',
        'controller' => 'App\\Http\\Controllers\\AboutPageController@about_page_update_team_member_section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::wn4Pgyp2qetvTALl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.service.page.price.plan' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/service-page/price-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServicePageController@service_page_price_plan_section',
        'controller' => 'App\\Http\\Controllers\\ServicePageController@service_page_price_plan_section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.service.page.price.plan',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zwnBq8wM7IkChiVK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/service-page/price-plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServicePageController@service_page_update_price_plan_section',
        'controller' => 'App\\Http\\Controllers\\ServicePageController@service_page_update_price_plan_section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::zwnBq8wM7IkChiVK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.service.page.cta' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/service-page/cta',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServicePageController@service_page_cta_section',
        'controller' => 'App\\Http\\Controllers\\ServicePageController@service_page_cta_section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.service.page.cta',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LU3uhCZnbQgwS5p3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/service-page/cta',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ServicePageController@service_page_update_cta_section',
        'controller' => 'App\\Http\\Controllers\\ServicePageController@service_page_update_cta_section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::LU3uhCZnbQgwS5p3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.team.page.about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/team-page/about-team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamPageController@team_page_about_section',
        'controller' => 'App\\Http\\Controllers\\TeamPageController@team_page_about_section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.team.page.about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::29CmaCzJEt3hoBHP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/team-page/about-team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamPageController@team_page_update_about_section',
        'controller' => 'App\\Http\\Controllers\\TeamPageController@team_page_update_about_section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::29CmaCzJEt3hoBHP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.team.page.team.member' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/team-page/team-member',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamPageController@team_page_team_section',
        'controller' => 'App\\Http\\Controllers\\TeamPageController@team_page_team_section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.team.page.team.member',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xYZDl8bDiSCR3KkO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/team-page/team-member',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamPageController@team_page_update_team_section',
        'controller' => 'App\\Http\\Controllers\\TeamPageController@team_page_update_team_section',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::xYZDl8bDiSCR3KkO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.page.form.area' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/contact-page/form-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactPageController@contact_page_form_area',
        'controller' => 'App\\Http\\Controllers\\ContactPageController@contact_page_form_area',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.page.form.area',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RLvMFsXPgfMqmm7e' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/form-area',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactPageController@contact_page_update_form_area',
        'controller' => 'App\\Http\\Controllers\\ContactPageController@contact_page_update_form_area',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::RLvMFsXPgfMqmm7e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.contact.page.map' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/contact-page/map',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactPageController@contact_page_map_area',
        'controller' => 'App\\Http\\Controllers\\ContactPageController@contact_page_map_area',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.contact.page.map',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CHZ8gYxFBVoLR48T' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/contact-page/map',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ContactPageController@contact_page_update_map_area',
        'controller' => 'App\\Http\\Controllers\\ContactPageController@contact_page_update_map_area',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::CHZ8gYxFBVoLR48T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.footer.about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/footer/about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FooterController@about_widget',
        'controller' => 'App\\Http\\Controllers\\FooterController@about_widget',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.footer.about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6FzjQnviYyOil3ky' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/footer/about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FooterController@update_about_widget',
        'controller' => 'App\\Http\\Controllers\\FooterController@update_about_widget',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::6FzjQnviYyOil3ky',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.footer.general' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/footer/general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FooterController@general_widget',
        'controller' => 'App\\Http\\Controllers\\FooterController@general_widget',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.footer.general',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8Oh5iCZvdEwTTLL1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/footer/general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FooterController@update_general_widget',
        'controller' => 'App\\Http\\Controllers\\FooterController@update_general_widget',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::8Oh5iCZvdEwTTLL1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.footer.useful.link' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/footer/useful-links',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FooterController@useful_links_widget',
        'controller' => 'App\\Http\\Controllers\\FooterController@useful_links_widget',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.footer.useful.link',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.footer.useful.link.widget' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/footer/useful-links/widget',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FooterController@update_widget_useful_links',
        'controller' => 'App\\Http\\Controllers\\FooterController@update_widget_useful_links',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.footer.useful.link.widget',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ijSII4fMOx9yIVzI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/footer/useful-links',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FooterController@new_useful_links_widget',
        'controller' => 'App\\Http\\Controllers\\FooterController@new_useful_links_widget',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::ijSII4fMOx9yIVzI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.footer.useful.link.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/footer/useful-links/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FooterController@update_useful_links_widget',
        'controller' => 'App\\Http\\Controllers\\FooterController@update_useful_links_widget',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.footer.useful.link.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.footer.useful.link.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/footer/useful-links/update/{delete}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FooterController@delete_useful_links_widget',
        'controller' => 'App\\Http\\Controllers\\FooterController@delete_useful_links_widget',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.footer.useful.link.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.footer.useful.link.menus' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/footer/useful-links/menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FooterController@useful_links_widget_menu_by_slug',
        'controller' => 'App\\Http\\Controllers\\FooterController@useful_links_widget_menu_by_slug',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.footer.useful.link.menus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.footer.recent.post' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/footer/recent-post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FooterController@recent_post_widget',
        'controller' => 'App\\Http\\Controllers\\FooterController@recent_post_widget',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.footer.recent.post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pTvVgGMD2m9x7bhv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/footer/recent-post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FooterController@update_recent_post_widget',
        'controller' => 'App\\Http\\Controllers\\FooterController@update_recent_post_widget',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::pTvVgGMD2m9x7bhv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.footer.important.link' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/footer/important-links',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FooterController@important_links_widget',
        'controller' => 'App\\Http\\Controllers\\FooterController@important_links_widget',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.footer.important.link',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.footer.important.link.widget' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/footer/important-links/widget',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FooterController@update_widget_important_links',
        'controller' => 'App\\Http\\Controllers\\FooterController@update_widget_important_links',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.footer.important.link.widget',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cYq9TGG2hhWfE4fb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/footer/important-links',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FooterController@new_important_links_widget',
        'controller' => 'App\\Http\\Controllers\\FooterController@new_important_links_widget',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::cYq9TGG2hhWfE4fb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.footer.important.link.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/footer/important-links/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FooterController@update_important_links_widget',
        'controller' => 'App\\Http\\Controllers\\FooterController@update_important_links_widget',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.footer.important.link.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.footer.important.link.menu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/footer/important-links/slug',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FooterController@important_links_widget_menu_by_slug',
        'controller' => 'App\\Http\\Controllers\\FooterController@important_links_widget_menu_by_slug',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.footer.important.link.menu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.footer.important.link.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/footer/important-links/update/{delete}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FooterController@delete_important_links_widget',
        'controller' => 'App\\Http\\Controllers\\FooterController@delete_important_links_widget',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.footer.important.link.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\NewsletterController@index',
        'controller' => 'App\\Http\\Controllers\\NewsletterController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.newsletter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/newsletter/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\NewsletterController@delete',
        'controller' => 'App\\Http\\Controllers\\NewsletterController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.newsletter.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.single.mail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/newsletter/single',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\NewsletterController@send_mail',
        'controller' => 'App\\Http\\Controllers\\NewsletterController@send_mail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.newsletter.single.mail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.newsletter.mail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/newsletter/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\NewsletterController@send_mail_all_index',
        'controller' => 'App\\Http\\Controllers\\NewsletterController@send_mail_all_index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.newsletter.mail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GjDjHjbrckifEuaj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/newsletter/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\NewsletterController@send_mail_all',
        'controller' => 'App\\Http\\Controllers\\NewsletterController@send_mail_all',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::GjDjHjbrckifEuaj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.quote.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/quote-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\QuotePageController@index',
        'controller' => 'App\\Http\\Controllers\\QuotePageController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.quote.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::teQhBoCn6U2qDgTE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/quote-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\QuotePageController@udpate',
        'controller' => 'App\\Http\\Controllers\\QuotePageController@udpate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::teQhBoCn6U2qDgTE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.order.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/order-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderPageController@index',
        'controller' => 'App\\Http\\Controllers\\OrderPageController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.order.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::38nZ8sqOmt9cOJom' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/order-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\OrderPageController@udpate',
        'controller' => 'App\\Http\\Controllers\\OrderPageController@udpate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::38nZ8sqOmt9cOJom',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.topbar' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/topbar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TopBarController@index',
        'controller' => 'App\\Http\\Controllers\\TopBarController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.topbar',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.new.support.info' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/topbar/new-support-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TopBarController@new_support_info',
        'controller' => 'App\\Http\\Controllers\\TopBarController@new_support_info',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.new.support.info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update.support.info' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/topbar/update-support-info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TopBarController@update_support_info',
        'controller' => 'App\\Http\\Controllers\\TopBarController@update_support_info',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.update.support.info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delete.support.info' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/topbar/delete-support-info/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TopBarController@delete_support_info',
        'controller' => 'App\\Http\\Controllers\\TopBarController@delete_support_info',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.delete.support.info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.new.social.item' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/topbar/new-social-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TopBarController@new_social_item',
        'controller' => 'App\\Http\\Controllers\\TopBarController@new_social_item',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.new.social.item',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.update.social.item' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/topbar/update-social-item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TopBarController@update_social_item',
        'controller' => 'App\\Http\\Controllers\\TopBarController@update_social_item',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.update.social.item',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delete.social.item' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/topbar/delete-social-item/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TopBarController@delete_social_item',
        'controller' => 'App\\Http\\Controllers\\TopBarController@delete_social_item',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.delete.social.item',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MenuController@index',
        'controller' => 'App\\Http\\Controllers\\MenuController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.menu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/new-menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MenuController@store_new_menu',
        'controller' => 'App\\Http\\Controllers\\MenuController@store_new_menu',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.menu.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/menu-edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MenuController@edit_menu',
        'controller' => 'App\\Http\\Controllers\\MenuController@edit_menu',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.menu.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/menu-update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MenuController@update_menu',
        'controller' => 'App\\Http\\Controllers\\MenuController@update_menu',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.menu.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/menu-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MenuController@delete_menu',
        'controller' => 'App\\Http\\Controllers\\MenuController@delete_menu',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.menu.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.menu.default' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/menu-default/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\MenuController@set_default_menu',
        'controller' => 'App\\Http\\Controllers\\MenuController@set_default_menu',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.menu.default',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@index',
        'controller' => 'App\\Http\\Controllers\\PagesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/new-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@new_page',
        'controller' => 'App\\Http\\Controllers\\PagesController@new_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.page.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aUsCLn0Dj06ULs6t' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/new-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@store_new_page',
        'controller' => 'App\\Http\\Controllers\\PagesController@store_new_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::aUsCLn0Dj06ULs6t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/page-edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@edit_page',
        'controller' => 'App\\Http\\Controllers\\PagesController@edit_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.page.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@update_page',
        'controller' => 'App\\Http\\Controllers\\PagesController@update_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.page.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.page.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/page-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@delete_page',
        'controller' => 'App\\Http\\Controllers\\PagesController@delete_page',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.page.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@index',
        'controller' => 'App\\Http\\Controllers\\BlogController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/new-blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@new_blog',
        'controller' => 'App\\Http\\Controllers\\BlogController@new_blog',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q8vCElsGTjUoIqc4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/new-blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@store_new_blog',
        'controller' => 'App\\Http\\Controllers\\BlogController@store_new_blog',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::Q8vCElsGTjUoIqc4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/blog-edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@edit_blog',
        'controller' => 'App\\Http\\Controllers\\BlogController@edit_blog',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog-update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@update_blog',
        'controller' => 'App\\Http\\Controllers\\BlogController@update_blog',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog-delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@delete_blog',
        'controller' => 'App\\Http\\Controllers\\BlogController@delete_blog',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/blog-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@category',
        'controller' => 'App\\Http\\Controllers\\BlogController@category',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XZoJY0MfLNBG0G8I' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@new_category',
        'controller' => 'App\\Http\\Controllers\\BlogController@new_category',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::XZoJY0MfLNBG0G8I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.category.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/delete-blog-category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@delete_category',
        'controller' => 'App\\Http\\Controllers\\BlogController@delete_category',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.category.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.category.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/update-blog-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@update_category',
        'controller' => 'App\\Http\\Controllers\\BlogController@update_category',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.category.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blog.lang.cat' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/blog-lang-by-cat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@Language_by_slug',
        'controller' => 'App\\Http\\Controllers\\BlogController@Language_by_slug',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.blog.lang.cat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.new.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/new-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserRoleManageController@new_user',
        'controller' => 'App\\Http\\Controllers\\UserRoleManageController@new_user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.new.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SGD5xbvpKVHlktD0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/new-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserRoleManageController@new_user_add',
        'controller' => 'App\\Http\\Controllers\\UserRoleManageController@new_user_add',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::SGD5xbvpKVHlktD0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/user-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserRoleManageController@user_update',
        'controller' => 'App\\Http\\Controllers\\UserRoleManageController@user_update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.user.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/user-password-chnage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserRoleManageController@user_password_change',
        'controller' => 'App\\Http\\Controllers\\UserRoleManageController@user_password_change',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.user.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.delete.user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/delete-user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserRoleManageController@new_user_delete',
        'controller' => 'App\\Http\\Controllers\\UserRoleManageController@new_user_delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.delete.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.all.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/all-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UserRoleManageController@all_user',
        'controller' => 'App\\Http\\Controllers\\UserRoleManageController@all_user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.all.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.profile.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@admin_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@admin_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.profile.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/profile-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@admin_profile',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@admin_profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.profile.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qbK1e0TcpZHUvQOv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/profile-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@admin_profile_update',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@admin_profile_update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::qbK1e0TcpZHUvQOv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.password.change' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/password-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@admin_password',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@admin_password',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.password.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JabVjlEZsApveaqC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/password-change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@admin_password_chagne',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@admin_password_chagne',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::JabVjlEZsApveaqC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.site.identity' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/site-identity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@site_identity',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@site_identity',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.general.site.identity',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PRyUm8mmyaJSqZEG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/site-identity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@update_site_identity',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@update_site_identity',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::PRyUm8mmyaJSqZEG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.basic.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/basic-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@basic_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@basic_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.general.basic.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fe8AcPki34YQSNdT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/basic-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@update_basic_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@update_basic_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::fe8AcPki34YQSNdT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.seo.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/seo-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@seo_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@seo_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.general.seo.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OMk1KXsGYvOihiTt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/seo-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@update_seo_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@update_seo_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::OMk1KXsGYvOihiTt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.scripts.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/scripts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@scripts_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@scripts_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.general.scripts.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8xbdM7NcO6fNzrvM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/scripts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@update_scripts_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@update_scripts_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::8xbdM7NcO6fNzrvM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.email.template' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/email-template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@email_template_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@email_template_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.general.email.template',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vYBy2wi6zWIyR3Wt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/email-template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@update_email_template_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@update_email_template_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::vYBy2wi6zWIyR3Wt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.typography.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/typography-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@typography_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@typography_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.general.typography.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qFe4W5HegJdbtIb6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/typography-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@update_typography_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@update_typography_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::qFe4W5HegJdbtIb6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.cache.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/cache-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@cache_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@cache_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.general.cache.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8B2JVnIH7XAG4g2f' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/cache-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@update_cache_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@update_cache_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::8B2JVnIH7XAG4g2f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.backup.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/backup-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@backup_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@backup_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.general.backup.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m4kZXIXnFGmW7udK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/backup-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@update_backup_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@update_backup_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::m4kZXIXnFGmW7udK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.backup.settings.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/backup-settings/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@delete_backup_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@delete_backup_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.general.backup.settings.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.backup.settings.restore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/backup-settings/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@restore_backup_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@restore_backup_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.general.backup.settings.restore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.update.system' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/update-system',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@update_system',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@update_system',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.general.update.system',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iyBzcOvAzijt3hbw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/update-system',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@update_system_version',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@update_system_version',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::iyBzcOvAzijt3hbw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.license.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/license-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@license_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@license_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.general.license.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ps3s4JvMsJCfJYyW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/license-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@update_license_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@update_license_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::Ps3s4JvMsJCfJYyW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.general.custom.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/general-settings/custom-css',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@custom_css_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@custom_css_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.general.custom.css',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oLpTmuo4eVbCEhfR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/general-settings/custom-css',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AdminDashboardController@update_custom_css_settings',
        'controller' => 'App\\Http\\Controllers\\AdminDashboardController@update_custom_css_settings',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'generated::oLpTmuo4eVbCEhfR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/languages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@index',
        'controller' => 'App\\Http\\Controllers\\LanguageController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.languages',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.words.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/languages/words/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@edit_words',
        'controller' => 'App\\Http\\Controllers\\LanguageController@edit_words',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.words.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.words.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/languages/words/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@update_words',
        'controller' => 'App\\Http\\Controllers\\LanguageController@update_words',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.words.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.new' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/languages/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@store',
        'controller' => 'App\\Http\\Controllers\\LanguageController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/languages/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@update',
        'controller' => 'App\\Http\\Controllers\\LanguageController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/languages/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@delete',
        'controller' => 'App\\Http\\Controllers\\LanguageController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.languages.default' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/languages/default/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@make_default',
        'controller' => 'App\\Http\\Controllers\\LanguageController@make_default',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.languages.default',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.courses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@index',
        'controller' => 'App\\Http\\Controllers\\CourseController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.courses.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.courses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/courses/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@show',
        'controller' => 'App\\Http\\Controllers\\CourseController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.courses.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.courses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/courses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@store',
        'controller' => 'App\\Http\\Controllers\\CourseController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.courses.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.courses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin-home/courses/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@update',
        'controller' => 'App\\Http\\Controllers\\CourseController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.courses.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.courses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin-home/courses/{course}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@destroy',
        'controller' => 'App\\Http\\Controllers\\CourseController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.courses.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.courses.students.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/courses/{course}/students/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@addStudents',
        'controller' => 'App\\Http\\Controllers\\CourseController@addStudents',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.courses.students.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.courses.students.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/courses/{course}/students/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@importStudents',
        'controller' => 'App\\Http\\Controllers\\CourseController@importStudents',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.courses.students.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.students.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'admin-home/students/{student}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StudentController@update',
        'controller' => 'App\\Http\\Controllers\\StudentController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.students.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.students.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/students/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StudentController@destroy',
        'controller' => 'App\\Http\\Controllers\\StudentController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.students.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.students.certificates.generate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/courses/{course}/certificates/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StudentController@generateCertificates',
        'controller' => 'App\\Http\\Controllers\\StudentController@generateCertificates',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.students.certificates.generate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.students.certificates.download' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin-home/courses/{course}/certificates/download',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\StudentController@downloadCertificates',
        'controller' => 'App\\Http\\Controllers\\StudentController@downloadCertificates',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.students.certificates.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.students.certificates.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin-home/students/{student}/certificates/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CourseController@viewCertificate',
        'controller' => 'App\\Http\\Controllers\\CourseController@viewCertificate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin-home',
        'where' => 
        array (
        ),
        'as' => 'admin.students.certificates.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g7T0yq2L1hwwEPBo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:247:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:29:"function(){
    \\phpinfo();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005ff0000000000000000";}";s:4:"hash";s:44:"CiyBPaM7EYh82MCl7qvmJJGPFMK7oVWjh0kxR66vzKA=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::g7T0yq2L1hwwEPBo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
