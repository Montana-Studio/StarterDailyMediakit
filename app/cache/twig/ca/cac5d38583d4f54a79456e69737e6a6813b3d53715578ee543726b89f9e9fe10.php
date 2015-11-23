<?php

/* @Page:/Users/marlene/Documents/Proyectos/Starterdaily/htdocs/app/user/pages/01.home/_contacto */
class __TwigTemplate_acc998ae6ae8e2db67d6cbf170badb501344437ade8bb0cc7b6ba9981af94529 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<form name=\"Contacto Mediakit StarterDaily\"
      action=\"/Starterdaily/htdocs/app/home/_contacto\"
      method=\"POST\">
        <div>
        
    <div class=\"form-field  vertical\">
                    <div class=\"form-label\">
                <label class=\"inline\">
                                                        Nombre
                                        <span class=\"required\">*</span>
                                </label>
            </div>
            <div class=\"form-data\"
                                data-grav-field=\"text\"
                data-grav-disabled=\"true\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-input-wrapper \">
                            <input
                                                                name=\"nombre\"
                                value=\"\"
                                                                    type=\"text\"
                                                                                                                                                                                        placeholder=\"Tu Nombre aquí\"                                                                                                                                                                                    required=\"required\"                                                                                                        
                                />
                        </div>
                                                </div>
            </div>
    </div>
        <div>
        
    <div class=\"form-field  vertical\">
                    <div class=\"form-label\">
                <label class=\"inline\">
                                                        Empresa
                                        <span class=\"required\">*</span>
                                </label>
            </div>
            <div class=\"form-data\"
                                data-grav-field=\"text\"
                data-grav-disabled=\"true\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-input-wrapper \">
                            <input
                                                                name=\"empresa\"
                                value=\"\"
                                                                    type=\"text\"
                                                                                                                                                                                        placeholder=\"¿Cual es nombre de la empresa?\"                                                                                                                                                                                    required=\"required\"                                                                                                        
                                />
                        </div>
                                                </div>
            </div>
    </div>
        <div>
        
    <div class=\"form-field  vertical\">
                    <div class=\"form-label\">
                <label class=\"inline\">
                                                        Marca
                                        <span class=\"required\">*</span>
                                </label>
            </div>
            <div class=\"form-data\"
                                data-grav-field=\"text\"
                data-grav-disabled=\"true\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-input-wrapper \">
                            <input
                                                                name=\"marca\"
                                value=\"\"
                                                                    type=\"text\"
                                                                                                                                                                                        placeholder=\"Marca a cotizar\"                                                                                                                                                                                    required=\"required\"                                                                                                        
                                />
                        </div>
                                                </div>
            </div>
    </div>
        <div>
        
    <div class=\"form-field  vertical\">
                    <div class=\"form-label\">
                <label class=\"inline\">
                                                        Email
                                        <span class=\"required\">*</span>
                                </label>
            </div>
            <div class=\"form-data\"
                                data-grav-field=\"text\"
                data-grav-disabled=\"true\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-input-wrapper \">
                            <input
                                                                name=\"email\"
                                value=\"\"
                                                                    type=\"text\"
                                                                                                                                                                                        placeholder=\"Tu email aquí\"                                                                                                                                                                                    required=\"required\"                                                                                                        
                                />
                        </div>
                                                </div>
            </div>
    </div>
        <div>
        
    <div class=\"form-field  vertical\">
                    <div class=\"form-label\">
                <label class=\"inline\">
                                                        Teléfono
                                        <span class=\"required\">*</span>
                                </label>
            </div>
            <div class=\"form-data\"
                                data-grav-field=\"text\"
                data-grav-disabled=\"true\"
                data-grav-default=\"null\"
                            >
                                                            <div class=\"form-input-wrapper \">
                            <input
                                                                name=\"telefono\"
                                value=\"\"
                                                                    type=\"text\"
                                                                                                                                                                                        placeholder=\"Número telefonico\"                                                                                                                                                                                    required=\"required\"                                                                                                        
                                />
                        </div>
                                                </div>
            </div>
    </div>
        <div>
        
    <div class=\"form-field  vertical\">
                    <div class=\"form-label\">
                <label class=\"inline\">
                                                        País
                                        
                                </label>
            </div>
            <div class=\"form-data\"
                    data-grav-selectize=\"&#x5B;&#x5D;\"
                    data-grav-field=\"select\"
                data-grav-disabled=\"true\"
                data-grav-default=\"null\"
                
            >
                                        <div class=\"form-select-wrapper \">
        <select class=\"\" name=\"pais\"
                                                                                                >
                        <option  value=\"option1\">País</option>
                        <option  value=\"option2\">Chile</option>
                        <option  value=\"option3\">USA</option>
                    </select>
    </div>
                            </div>
            </div>
    </div>

\t<div class=\"buttons\">
\t\t    <button class=\"button\" type=\"submit\">Enviar</button>
\t\t</div>

  <input type=\"hidden\" id=\"form-nonce\" name=\"form-nonce\" value=\"\$2y\$10\$Jvmrzq5NE.JPfTQ9ZWtSa.EPlUSFHKXsLob..8eYtnztW2x0Y5I9u\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/marlene/Documents/Proyectos/Starterdaily/htdocs/app/user/pages/01.home/_contacto";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* */
/* <form name="Contacto Mediakit StarterDaily"*/
/*       action="/Starterdaily/htdocs/app/home/_contacto"*/
/*       method="POST">*/
/*         <div>*/
/*         */
/*     <div class="form-field  vertical">*/
/*                     <div class="form-label">*/
/*                 <label class="inline">*/
/*                                                         Nombre*/
/*                                         <span class="required">*</span>*/
/*                                 </label>*/
/*             </div>*/
/*             <div class="form-data"*/
/*                                 data-grav-field="text"*/
/*                 data-grav-disabled="true"*/
/*                 data-grav-default="null"*/
/*                             >*/
/*                                                             <div class="form-input-wrapper ">*/
/*                             <input*/
/*                                                                 name="nombre"*/
/*                                 value=""*/
/*                                                                     type="text"*/
/*                                                                                                                                                                                         placeholder="Tu Nombre aquí"                                                                                                                                                                                    required="required"                                                                                                        */
/*                                 />*/
/*                         </div>*/
/*                                                 </div>*/
/*             </div>*/
/*     </div>*/
/*         <div>*/
/*         */
/*     <div class="form-field  vertical">*/
/*                     <div class="form-label">*/
/*                 <label class="inline">*/
/*                                                         Empresa*/
/*                                         <span class="required">*</span>*/
/*                                 </label>*/
/*             </div>*/
/*             <div class="form-data"*/
/*                                 data-grav-field="text"*/
/*                 data-grav-disabled="true"*/
/*                 data-grav-default="null"*/
/*                             >*/
/*                                                             <div class="form-input-wrapper ">*/
/*                             <input*/
/*                                                                 name="empresa"*/
/*                                 value=""*/
/*                                                                     type="text"*/
/*                                                                                                                                                                                         placeholder="¿Cual es nombre de la empresa?"                                                                                                                                                                                    required="required"                                                                                                        */
/*                                 />*/
/*                         </div>*/
/*                                                 </div>*/
/*             </div>*/
/*     </div>*/
/*         <div>*/
/*         */
/*     <div class="form-field  vertical">*/
/*                     <div class="form-label">*/
/*                 <label class="inline">*/
/*                                                         Marca*/
/*                                         <span class="required">*</span>*/
/*                                 </label>*/
/*             </div>*/
/*             <div class="form-data"*/
/*                                 data-grav-field="text"*/
/*                 data-grav-disabled="true"*/
/*                 data-grav-default="null"*/
/*                             >*/
/*                                                             <div class="form-input-wrapper ">*/
/*                             <input*/
/*                                                                 name="marca"*/
/*                                 value=""*/
/*                                                                     type="text"*/
/*                                                                                                                                                                                         placeholder="Marca a cotizar"                                                                                                                                                                                    required="required"                                                                                                        */
/*                                 />*/
/*                         </div>*/
/*                                                 </div>*/
/*             </div>*/
/*     </div>*/
/*         <div>*/
/*         */
/*     <div class="form-field  vertical">*/
/*                     <div class="form-label">*/
/*                 <label class="inline">*/
/*                                                         Email*/
/*                                         <span class="required">*</span>*/
/*                                 </label>*/
/*             </div>*/
/*             <div class="form-data"*/
/*                                 data-grav-field="text"*/
/*                 data-grav-disabled="true"*/
/*                 data-grav-default="null"*/
/*                             >*/
/*                                                             <div class="form-input-wrapper ">*/
/*                             <input*/
/*                                                                 name="email"*/
/*                                 value=""*/
/*                                                                     type="text"*/
/*                                                                                                                                                                                         placeholder="Tu email aquí"                                                                                                                                                                                    required="required"                                                                                                        */
/*                                 />*/
/*                         </div>*/
/*                                                 </div>*/
/*             </div>*/
/*     </div>*/
/*         <div>*/
/*         */
/*     <div class="form-field  vertical">*/
/*                     <div class="form-label">*/
/*                 <label class="inline">*/
/*                                                         Teléfono*/
/*                                         <span class="required">*</span>*/
/*                                 </label>*/
/*             </div>*/
/*             <div class="form-data"*/
/*                                 data-grav-field="text"*/
/*                 data-grav-disabled="true"*/
/*                 data-grav-default="null"*/
/*                             >*/
/*                                                             <div class="form-input-wrapper ">*/
/*                             <input*/
/*                                                                 name="telefono"*/
/*                                 value=""*/
/*                                                                     type="text"*/
/*                                                                                                                                                                                         placeholder="Número telefonico"                                                                                                                                                                                    required="required"                                                                                                        */
/*                                 />*/
/*                         </div>*/
/*                                                 </div>*/
/*             </div>*/
/*     </div>*/
/*         <div>*/
/*         */
/*     <div class="form-field  vertical">*/
/*                     <div class="form-label">*/
/*                 <label class="inline">*/
/*                                                         País*/
/*                                         */
/*                                 </label>*/
/*             </div>*/
/*             <div class="form-data"*/
/*                     data-grav-selectize="&#x5B;&#x5D;"*/
/*                     data-grav-field="select"*/
/*                 data-grav-disabled="true"*/
/*                 data-grav-default="null"*/
/*                 */
/*             >*/
/*                                         <div class="form-select-wrapper ">*/
/*         <select class="" name="pais"*/
/*                                                                                                 >*/
/*                         <option  value="option1">País</option>*/
/*                         <option  value="option2">Chile</option>*/
/*                         <option  value="option3">USA</option>*/
/*                     </select>*/
/*     </div>*/
/*                             </div>*/
/*             </div>*/
/*     </div>*/
/* */
/* 	<div class="buttons">*/
/* 		    <button class="button" type="submit">Enviar</button>*/
/* 		</div>*/
/* */
/*   <input type="hidden" id="form-nonce" name="form-nonce" value="$2y$10$Jvmrzq5NE.JPfTQ9ZWtSa.EPlUSFHKXsLob..8eYtnztW2x0Y5I9u" />*/
/* </form>*/
/* */
