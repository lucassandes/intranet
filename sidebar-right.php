<?php
global $dm_settings;
if ($dm_settings['right_sidebar'] != 0) : ?>
    <div class="col-md-<?php echo $dm_settings['right_sidebar_width']; ?> dmbs-right">
        <?php //get the right sidebar
        dynamic_sidebar('Right Sidebar'); ?>
       <?php /* <h3 class="red"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span> Aniversariantes</h3>
        <aside id="recent-posts-2" class="widget widget-proximos-aniversariantes">
            <!--<h2><span class="glyphicon glyphicon-gift" aria-hidden="true"></span>  Aniversariantes</h2> -->
            <div class="item-aniversario">
                <div class="dia">
                    <h4>24</h4>
                    <h5>fev</h5>
                </div>
                <ul>
                    <li class="nome-vereador"><span class="bolo-aniversario" >&nbsp;</span> Nome do Vereador</li>
                    <li class="local-trabalho">Gabinete Local de Trabalho</li>

                </ul>
            </div>

            <div class="item-aniversario">
                <img src="http://localhost/intranet_wp/wp-content/uploads/2015/01/foto-1.jpg"/>
                <ul>
                    <li class="nome-vereador">Nome do Vereador</li>
                    <li class="local-trabalho">Gabinete Local de Trabalho</li>
                    <li class="data">07 de setembro</li>
                </ul>
            </div>

            <div class="item-aniversario">
                <img src="http://localhost/intranet_wp/wp-content/uploads/2015/01/foto-1.jpg"/>
                <ul>
                    <li class="nome-vereador">Nome do Vereador</li>
                    <li class="local-trabalho">Gabinete Local de Trabalho</li>
                    <li class="data">07 de setembro</li>
                </ul>
            </div>

            <div class="clear"></div>

        </aside>

        <h3 class="green"> <i class="icon-calendar"></i> Próximos Eventos</h3>
        <aside id="recent-posts-2" class="widget widget-proximos-eventos">

            <ul>
                <li class="data"> 25/01/2014 </li>
                <li class="local"> Pellentesque luctus, augue nec varius </li>
            </ul>

            <ul>
                <li class="data"> 25/01/2014 </li>
                <li class="local"> Pellentesque luctus, augue nec varius </li>
            </ul>

            <ul>
                <li class="data"> 25/01/2014 </li>
                <li class="local"> Pellentesque luctus, augue nec varius </li>
            </ul>


            <div class="clear"></div>

        </aside>
        */ ?>
    </div>
<?php endif; ?>