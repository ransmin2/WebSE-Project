<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* order/index.html.twig */
class __TwigTemplate_8bac5702f0ed70824e68b7b2a4a8fc4c31a4a646ec3f94ba70784c3496cb0bc2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "order/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello OrderController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }

</style>

    <!-- Menu -->
    <div id=\"menuContainer\">
        <h1 id=\"title\" class=\"pageTitle\">
            Menu
        </h1>
        <div id=\"menubox\">
            <div id=\"menuPanel\" class=\"container-fluid\">
                <div id=\"item1\" class=\"card\">
                    <img src=\"images/Chocolate.jpg\" alt=\"Chocolate Doughnut\" style=\"width: 300px; height: 300px;\" class=\"images\">
                    <button onclick=\"order.removeItem(menu.menuItems[0])\" class=\"itemQuantityBtn\">-</button>
                    <p id=\"chocolateAmount\" class=\"amount\"></p>
                    <button onclick=\"order.addItem(menu.menuItems[0])\" class=\"itemQuantityBtn\">+</button>
                    <p id=\"chocolate\" class=\"item\"></p>
                </div>

                <div id=\"item2\" class=\"card\">
                    <img src=\"images/Sprinkle.jpg\" alt=\"Sprinkle Doughnut\" style=\"width: 300px; height: 300px;\" class=\"images\">
                    <button onclick=\"order.removeItem(menu.menuItems[1])\" class=\"itemQuantityBtn\">-</button>
                    <p id=\"sprinkleAmount\" class=\"amount\"></p>
                    <button onclick=\"order.addItem(menu.menuItems[1])\" class=\"itemQuantityBtn\">+</button>
                    <p id=\"sprinkle\" class=\"item\"></p>
                </div>

                <div id=\"item3\" class=\"card\">
                    <img src=\"images/PlainRing.jpg\" alt=\"Plain Ring Doughnut\" style=\"width: 300px; height: 300px;\" class=\"images\">
                    <button onclick=\"order.removeItem(menu.menuItems[2])\" class=\"itemQuantityBtn\">-</button>
                    <p id=\"plainRingAmount\" class=\"amount\"></p>
                    <button onclick=\"order.addItem(menu.menuItems[2])\" class=\"itemQuantityBtn\">+</button>
                    <p id=\"plainRing\" class=\"item\"></p>
                </div>

                <div id=\"item4\" class=\"card\">
                    <img src=\"images/Jam.jpg\" alt=\"Jam Doughnut\" style=\"width: 300px; height: 300px;\" class=\"images\">
                    <button onclick=\"order.removeItem(menu.menuItems[3])\" class=\"itemQuantityBtn\">-</button>
                    <p id=\"jamAmount\" class=\"amount\"></p>
                    <button onclick=\"order.addItem(menu.menuItems[3])\" class=\"itemQuantityBtn\">+</button>
                    <p id=\"jam\" class=\"item\"></p>
                </div>

                <div id=\"item5\" class=\"card\">
                    <img src=\"images/Lemon.jpg\" alt=\"Lemon Doughnut\" style=\"width: 300px; height: 300px;\" class=\"images\">
                    <button onclick=\"order.removeItem(menu.menuItems[4])\" class=\"itemQuantityBtn\">-</button>
                    <p id=\"lemonAmount\" class=\"amount\"></p>
                    <button onclick=\"order.addItem(menu.menuItems[4])\" class=\"itemQuantityBtn\">+</button>
                    <p id=\"lemon\" class=\"item\"></p>
                </div>

                <div id=\"item6\" class=\"card\">
                    <img src=\"images/Iced.jpg\" alt=\"Iced Doughnut\" style=\"width: 300px; height: 300px;\" class=\"images\">
                    <button onclick=\"order.removeItem(menu.menuItems[5])\" class=\"itemQuantityBtn\">-</button>
                    <p id=\"icedAmount\" class=\"amount\"></p>
                    <button onclick=\"order.addItem(menu.menuItems[5])\" class=\"itemQuantityBtn\">+</button>
                    <p id=\"iced\" class=\"item\"></p>
                </div>
                <div id=\"item7\" class=\"card\">
                    <img src=\"images/fanta.jpg\" alt=\"Fanta 330ml\" style=\"width: 300px; height: 300px;\" class=\"images\">
                    <button onclick=\"order.removeItem(menu.menuItems[5])\" class=\"itemQuantityBtn\">-</button>
                    <p id=\"fantaAmount\" class=\"amount\"></p>
                    <button onclick=\"order.addItem(menu.menuItems[5])\" class=\"itemQuantityBtn\">+</button>
                    <p id=\"fanta\" class=\"item\"></p>
                </div>
                <div id=\"item8\" class=\"card\">
                    <img src=\"images/sprite.jpg\" alt=\"Sprite 330ml\" style=\"width: 300px; height: 300px;\" class=\"images\">
                    <button onclick=\"order.removeItem(menu.menuItems[5])\" class=\"itemQuantityBtn\">-</button>
                    <p id=\"spriteAmount\" class=\"amount\"></p>
                    <button onclick=\"order.addItem(menu.menuItems[5])\" class=\"itemQuantityBtn\">+</button>
                    <p id=\"sprite\" class=\"item\"></p>
                </div>

                <div id=\"bottomDiv\" class=\"container\">
                    <select id=\"select\" class=\"menuOrderDetails\" onchange=\"order.selectOrderType()\">
                        <option value=\"delivery\">Delivery</option>
                        <option value=\"pickup\">Pickup</option>
                    </select>
                    <div id=\"menuSpacer\" class=\"menuOrderDetails\"></div>
                    <!--spacer-->
                    <p id=\"orderTotal\" class=\"menuOrderDetails\"></p>
                    <div id=\"checkoutbutton\" class=\"menuOrderDetails\">
                        <button onclick=\"order.checkout()\" class=\"actionBtn\">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "order/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 9,  66 => 8,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello OrderController!{% endblock %}




{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }

</style>

    <!-- Menu -->
    <div id=\"menuContainer\">
        <h1 id=\"title\" class=\"pageTitle\">
            Menu
        </h1>
        <div id=\"menubox\">
            <div id=\"menuPanel\" class=\"container-fluid\">
                <div id=\"item1\" class=\"card\">
                    <img src=\"images/Chocolate.jpg\" alt=\"Chocolate Doughnut\" style=\"width: 300px; height: 300px;\" class=\"images\">
                    <button onclick=\"order.removeItem(menu.menuItems[0])\" class=\"itemQuantityBtn\">-</button>
                    <p id=\"chocolateAmount\" class=\"amount\"></p>
                    <button onclick=\"order.addItem(menu.menuItems[0])\" class=\"itemQuantityBtn\">+</button>
                    <p id=\"chocolate\" class=\"item\"></p>
                </div>

                <div id=\"item2\" class=\"card\">
                    <img src=\"images/Sprinkle.jpg\" alt=\"Sprinkle Doughnut\" style=\"width: 300px; height: 300px;\" class=\"images\">
                    <button onclick=\"order.removeItem(menu.menuItems[1])\" class=\"itemQuantityBtn\">-</button>
                    <p id=\"sprinkleAmount\" class=\"amount\"></p>
                    <button onclick=\"order.addItem(menu.menuItems[1])\" class=\"itemQuantityBtn\">+</button>
                    <p id=\"sprinkle\" class=\"item\"></p>
                </div>

                <div id=\"item3\" class=\"card\">
                    <img src=\"images/PlainRing.jpg\" alt=\"Plain Ring Doughnut\" style=\"width: 300px; height: 300px;\" class=\"images\">
                    <button onclick=\"order.removeItem(menu.menuItems[2])\" class=\"itemQuantityBtn\">-</button>
                    <p id=\"plainRingAmount\" class=\"amount\"></p>
                    <button onclick=\"order.addItem(menu.menuItems[2])\" class=\"itemQuantityBtn\">+</button>
                    <p id=\"plainRing\" class=\"item\"></p>
                </div>

                <div id=\"item4\" class=\"card\">
                    <img src=\"images/Jam.jpg\" alt=\"Jam Doughnut\" style=\"width: 300px; height: 300px;\" class=\"images\">
                    <button onclick=\"order.removeItem(menu.menuItems[3])\" class=\"itemQuantityBtn\">-</button>
                    <p id=\"jamAmount\" class=\"amount\"></p>
                    <button onclick=\"order.addItem(menu.menuItems[3])\" class=\"itemQuantityBtn\">+</button>
                    <p id=\"jam\" class=\"item\"></p>
                </div>

                <div id=\"item5\" class=\"card\">
                    <img src=\"images/Lemon.jpg\" alt=\"Lemon Doughnut\" style=\"width: 300px; height: 300px;\" class=\"images\">
                    <button onclick=\"order.removeItem(menu.menuItems[4])\" class=\"itemQuantityBtn\">-</button>
                    <p id=\"lemonAmount\" class=\"amount\"></p>
                    <button onclick=\"order.addItem(menu.menuItems[4])\" class=\"itemQuantityBtn\">+</button>
                    <p id=\"lemon\" class=\"item\"></p>
                </div>

                <div id=\"item6\" class=\"card\">
                    <img src=\"images/Iced.jpg\" alt=\"Iced Doughnut\" style=\"width: 300px; height: 300px;\" class=\"images\">
                    <button onclick=\"order.removeItem(menu.menuItems[5])\" class=\"itemQuantityBtn\">-</button>
                    <p id=\"icedAmount\" class=\"amount\"></p>
                    <button onclick=\"order.addItem(menu.menuItems[5])\" class=\"itemQuantityBtn\">+</button>
                    <p id=\"iced\" class=\"item\"></p>
                </div>
                <div id=\"item7\" class=\"card\">
                    <img src=\"images/fanta.jpg\" alt=\"Fanta 330ml\" style=\"width: 300px; height: 300px;\" class=\"images\">
                    <button onclick=\"order.removeItem(menu.menuItems[5])\" class=\"itemQuantityBtn\">-</button>
                    <p id=\"fantaAmount\" class=\"amount\"></p>
                    <button onclick=\"order.addItem(menu.menuItems[5])\" class=\"itemQuantityBtn\">+</button>
                    <p id=\"fanta\" class=\"item\"></p>
                </div>
                <div id=\"item8\" class=\"card\">
                    <img src=\"images/sprite.jpg\" alt=\"Sprite 330ml\" style=\"width: 300px; height: 300px;\" class=\"images\">
                    <button onclick=\"order.removeItem(menu.menuItems[5])\" class=\"itemQuantityBtn\">-</button>
                    <p id=\"spriteAmount\" class=\"amount\"></p>
                    <button onclick=\"order.addItem(menu.menuItems[5])\" class=\"itemQuantityBtn\">+</button>
                    <p id=\"sprite\" class=\"item\"></p>
                </div>

                <div id=\"bottomDiv\" class=\"container\">
                    <select id=\"select\" class=\"menuOrderDetails\" onchange=\"order.selectOrderType()\">
                        <option value=\"delivery\">Delivery</option>
                        <option value=\"pickup\">Pickup</option>
                    </select>
                    <div id=\"menuSpacer\" class=\"menuOrderDetails\"></div>
                    <!--spacer-->
                    <p id=\"orderTotal\" class=\"menuOrderDetails\"></p>
                    <div id=\"checkoutbutton\" class=\"menuOrderDetails\">
                        <button onclick=\"order.checkout()\" class=\"actionBtn\">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "order/index.html.twig", "C:\\Users\\ransm\\Desktop\\symphart-master\\templates\\order\\index.html.twig");
    }
}
