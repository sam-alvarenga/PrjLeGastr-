<div class="global-page-container">

                <div class="small-11 small-centered large-12 columns footer-section">

                    <div class="follow-us small-5 medium-3 small-offset-1 medium-offset-0 columns">
                        <h4 class="footer-section-title">Siga-nos</h4>
                        <a href="http://www.facebook.com"><img src="img/social-icons/facebook.svg" alt="facebook-icon"></a>
                        <a href="http://www.twitter.com"><img src="img/social-icons/twitter.svg" alt="facebook-icon"></a>
                        <a href="http://www.instagram.com"><img src="img/social-icons/instagram.svg" alt="facebook-icon"></a>
                    </div>
                    
                    <div class="contato small-5 medium-3 small-offset-1 medium-offset-0 columns">
                        <h4 class="footer-section-title">Contato</h4>
                        <p>
                            Avenida Conselheiro Nébias, 308<br>
                            Santos/SP<br>
                            T. 13-3633-3333<br>
                            contato@restobar.com.br
                        </p>
                    </div>
                    
                    <div class="horario small-5 medium-3 small-offset-1 medium-offset-0 columns">
                        <h4 class="footer-section-title">Horários</h4>

                        <?php
                            $dia_semana = date('w');
                            $agora = strtotime('now');
                            $inicio_dia = strtotime('today');
                            $hora_atual = $agora - $inicio_dia;
                            
                            if($dia_semana >= 1 && $dia_semana <= 5)
                            {
                                if($agora < 41400)
                                {
                                    $texto_agora = 'Fechado Agora';
                                    $classe_agora = 'horario-fechado';
                                }
                                else
                                {
                                    $texto_agora = 'Aberto Agora';
                                    $classe_agora = 'horario-aberto';
                                }
                            }
                            else if($dia_semana == 6)
                            {
                                if($agora >= 41400 || $agora <= 7200)
                                {
                                    $texto_agora = 'Aberto Agora';
                                    $classe_agora = 'horario-aberto';
                                }
                                else
                                {
                                    $texto_agora = 'Fechado Agora';
                                    $classe_agora = 'horario-fechado';
                                } 
                            }
                            else if($dia_semana == 7)
                            {
                                if($agora >= 41400 && $agora <= 64800)
                                {
                                    $texto_agora = 'Aberto Agora';
                                    $classe_agora = 'horario-aberto';
                                }
                                else
                                {
                                    $texto_agora = 'Fechado Agora';
                                    $classe_agora = 'horario-fechado';
                                }
                            }
                        ?>

                        <p><span class="<?php echo $classe_agora ?>"><?php echo $texto_agora?> </span><br>
                        Seg-Sex: 11h30 - 24h00<br>
                        Sábado 11h30 - 02h00<br>
                        Domingo 11h30 - 18h</p>
                    </div>
                    
                    <div class="como-chegar small-5 medium-3 small-offset-1 medium-offset-0 columns">
                        <h4 class="footer-section-title">Como chegar</h4>
                        <div id="map"></div>
                    </div>
                    
                    <hr></hr>
                    
                    <div class="copyright small-12 columns">
                    
                        2022 &copy; Todos os direitos reservados
                    
                    </div>
                </div>
            
            </div>