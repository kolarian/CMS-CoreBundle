Sortable bundle
=======================

Symfony 3 Core bundle for CMS JELLINEK

1. Download this bundle to your project first. The preferred way to do it is
    to use [Composer](https://getcomposer.org/) package manager:
    
    ``` json
    $ composer require twin-elements/core-bundle
    ```
    
    > **NOTE:** If you haven't installed `Composer` yet, check the [installation guide][2].

    > **NOTE:** If you're not using `Composer`, add the `CoreBundle` to your autoloader manually. 

2. Add this bundle to your application's kernel:
    
    ``` php
    // app/AppKernel.php
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new TwinElements\CoreBundle\TwinElementsCoreBundle(),
            // ...
        );
    }
    ```
3. Add to routing.yml
    ```$xslt
    twin_elements_core:
        resource: "@TwinElementsCoreBundle/Controller/"
        prefix:   /
    ```
    
Usage
=====
    
Add    ```styles```  to stylesheets

Add ```javascripts```

To include cookies 
```
{% include '@TwinElementsCore/cookies/cookies.html.twig' %}
```

To include push-alerts
```
{% include '@TwinElementsCore/alerts/alerts.html.twig' %}
```
