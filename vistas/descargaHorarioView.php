<table class="table table-striped">
        <tr>
        <th>Hora</th>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miercoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
        <th>Sabado</th>
        </tr>
        <tr>
        <td>
            07:00 - 07:30
            <!--Los datos a listar están almacenados en $parametros["datos"], que lo recibimos del controlador-->
        <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "07:00") : ?>
            <td><?= $d["nombre"] ?> <a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "07:00") : ?>
            <td></td>
            <td><?= $d["nombre"] ?> <a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i>  </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i> </a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "07:00") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?> <a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i>  </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i> </a></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "07:00") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?> <a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i> </a></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "07:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?> <a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i>  </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i> </a></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "07:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?> <a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i>  </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i> </a></td>
            <?php endif; ?>   
        <?php endforeach; ?>

        </td>
        </tr>

        <tr>
        <td>
            07:30 - 08:00
                        <!--Los datos a listar están almacenados en $parametros["datos"], que lo recibimos del controlador-->
        <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "07:30") : ?>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "07:30") : ?>
            <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "07:30") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "07:30") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "07:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "07:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <?php endif; ?>            
            <?php endforeach; ?>
        </td>
        </tr>
        <tr>
        <td>
            08:00 - 08:30
                        <!--Los datos a listar están almacenados en $parametros["datos"], que lo recibimos del controlador-->
        <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "08:00") : ?>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i>  </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i> </a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "08:00") : ?>
            <td></td>
            <td><?= $d["nombre"] ?> <a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i>  </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i> </a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "08:00") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?> <a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i>  </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i> </a></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "08:00") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?> <a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i> </a></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "08:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?> <a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i>  </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i> </a></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "08:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?> <a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i>  </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i> </a></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>
        
        <tr>
        <td>
            08:30 - 09:00
        <!--Los datos a listar están almacenados en $parametros["datos"], que lo recibimos del controlador-->
        <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "08:30") : ?>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "08:30") : ?>
            <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "08:30") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "08:30") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "08:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "08:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>
        <tr>
        <td>
            09:00 - 09:30
                        <!--Los datos a listar están almacenados en $parametros["datos"], que lo recibimos del controlador-->
        <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "09:00") : ?>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "09:00") : ?>
            <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "09:00") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "09:00") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "09:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "09:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>
        
        <tr>
        <td>
            09:30 - 10:00
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "09:30") : ?>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "09:30") : ?>
            <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "09:30") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "09:30") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "09:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "09:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>
        <tr>
        <td>
            10:00 - 10:30
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "10:00") : ?>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "10:00") : ?>
            <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "10:00") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "10:00") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "10:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "10:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>
        
        <tr>
        <td>
            10:30 - 11:00
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "10:30") : ?>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "10:30") : ?>
            <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "10:30") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "10:30") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "10:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "10:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>
        <tr>
        <td>
            11:00 - 11:30
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "11:00") : ?>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "11:00") : ?>
            <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "11:00") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "11:00") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "11:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "11:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>
        
        <tr>
        <td>
            11:30 - 12:00
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "11:30") : ?>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "11:30") : ?>
            <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "11:30") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "11:30") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "11:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "11:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>
        <tr>
        <td>
            12:00 - 12:30
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "12:00") : ?>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "12:00") : ?>
            <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "12:00") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "12:00") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "12:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "12:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>
        
        <tr>
        <td>
            12:30 - 13:00
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "12:30") : ?>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "12:30") : ?>
            <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "12:30") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "12:30") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "12:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "12:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>

        <tr>
        <td>
            13:00 - 13:30
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "13:00") : ?>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "13:00") : ?>
            <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "13:00") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "13:00") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "13:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "13:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>
        
        <tr>
        <td>
            13:30 - 14:00
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "13:30") : ?>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "13:30") : ?>
            <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "13:30") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "13:30") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "13:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "13:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>

        <tr>
        <td>
            14:00 - 14:30
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "14:00") : ?>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "14:00") : ?>
            <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "14:00") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "14:00") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "14:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "14:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>

        <tr>
        <td>
            14:30 - 15:00
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "14:30") : ?>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "14:30") : ?>
            <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "14:30") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "14:30") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "14:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "14:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <?php endif; ?>
            <?php endforeach; ?>
        </td>
        </tr>

        <tr>
        <td>
            15:00 - 15:30
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "15:00") : ?>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "15:00") : ?>
            <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "15:00") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "15:00") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "15:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "15:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <?php endif; ?>
            <?php endforeach; ?>

        </td>
        </tr>

        <tr>
        <td>
            15:30 - 16:00
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == "15:30") : ?>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == "15:30") : ?>
            <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == "15:30") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == "15:30") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == "15:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == "15:30") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <?php endif; ?>
            <?php endforeach; ?>

        </td>
        </tr>

        <tr>
        <td>
            16:00 - 16:35
            <?php foreach ($datos as $d) : ?>
          <!--Mostramos cada registro en una fila de la tabla-->
          <?php if ($d["dia"] == "lunes" && $d["hora_inicio"] == " 16:00") : ?>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          <?php elseif ($d["dia"] == "martes" && $d["hora_inicio"] == " 16:00") : ?>
            <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "miercoles" && $d["hora_inicio"] == " 16:00") : ?>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "jueves" && $d["hora_inicio"] == " 16:00") : ?>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <td></td>
            <?php elseif ($d["dia"] == "viernes" && $d["hora_inicio"] == " 16:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <td></td>
            <?php elseif ($d["dia"] == "sabado" && $d["hora_inicio"] == " 16:00") : ?>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <td><?= $d["nombre"] ?><a href="?controller=Home&accion=actualizarActividad&id=<?= $d['id'] ?>"><i class="fas fa-edit"></i> </a><a href="?controller=Home&accion=borrarActividad&id=<?= $d['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            <?php endif; ?>
            <?php endforeach; ?>

        </td>
        </tr>
  
      </table>