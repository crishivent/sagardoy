<div class="submenu equipo">
    <div class="row">
        <div class="col-4">
            <div class="titulo">Equipo</div>
            <div class="texto">
                Facilisi vitae suspendisse eget dui donec, a quisque quis in quis integer volutpat. In tellus commodo.
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-6">
            <div class="form">
                <form id="search-form" method="GET" action="https://sagardoy.neuronalcode.io/equipo/">
                    <div class="row">
                        <div class="col-12">
                            <div class="subtitulo">Buscar abogado</div>
                            <div class="input-email">
                                <input 
                                    type="text" 
                                    name="_buscar" 
                                    class="input" 
                                    value="" 
                                    placeholder="Buscar" />
                                <a href="#" class="btn-lupa"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="select">
                                <select name="_cargos" id="cargos-select">
                                    <option value="" disabled selected>Cargo</option>
                                    <?php
                                    global $wpdb;
                                    $meta_key = 'cargo';
                                    $results = $wpdb->get_col(
                                        $wpdb->prepare(
                                            "SELECT DISTINCT meta_value 
                                            FROM {$wpdb->postmeta} 
                                            WHERE meta_key = %s 
                                            AND meta_value != ''", 
                                            $meta_key
                                        )
                                    );
                                    if (!empty($results)) {
                                        foreach ($results as $cargo) {
                                            echo '<option value="' . esc_attr($cargo) . '">' . esc_html($cargo) . '</option>';
                                        }
                                    } else {
                                        echo '<option value="0" disabled>No hay cargos disponibles</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="select">
                                <select name="_sedes" id="sedes-select">
                                    <option value="" disabled selected>Sede</option>
                                    <?php
                                    $args = array(
                                        'post_type'      => 'sede',
                                        'posts_per_page' => -1,
                                        'post_status'    => 'publish',
                                        'orderby'        => 'title',
                                        'order'          => 'ASC',
                                    );

                                    $sede_query = new WP_Query($args);
                                    if ($sede_query->have_posts()) {
                                        while ($sede_query->have_posts()) {
                                            $sede_query->the_post();
                                            echo '<option value="' . esc_attr(get_the_ID()) . '">' . esc_html(get_the_title()) . '</option>';
                                        }
                                        wp_reset_postdata();
                                    } else {
                                        echo '<option value="0" disabled>No hay sedes disponibles</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn-buscar">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
            <ul class="btns">
                <li><a href="#">Conoce a nuestro equipo</a></li>
                <li><a href="#">Únete al equipo</a></li>
            </ul>
        </div>
    </div>
</div>

<script>
    document.getElementById('search-form').addEventListener('submit', function (e) {
        e.preventDefault();
        const form = e.target;
        const action = form.getAttribute('action');
        const params = new URLSearchParams(new FormData(form));
        const fullUrl = `${action}?${params.toString()}#equiporesult`;
        window.location.href = fullUrl;
    });
</script>
