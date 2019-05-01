<?php
include_once('../../_config/config.php');
/**
 * query
 * ?edit-jur.php
 * show nama jurusan
 */
$result = mysqli_query($conncrud, "SELECT
                                        *
                                    FROM
                                        jurusan jur
                                    WHERE
                                        jur.kd_jur = '$kd_jur'
                                ");
