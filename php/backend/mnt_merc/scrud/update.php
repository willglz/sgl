<?php
	include '../../maestros/conexion.php';
	$cn = new Database();
	$dmnumero = $_POST['cmbdm2'];
	$codigomerc = $_POST['txtcodigo2'];
	$nombre = utf8_decode(htmlentities($_POST['txtnombre2']));
	$numcajas = $_POST['txtcajas2'];
	$preciou = $_POST['txtpreciou2'];
	$preciov = $_POST['txtpreciov2'];
	$cantxcaja = $_POST['txtcantcaja2'];
	$ml = $_POST['txtml2'];
	$porcalc = $_POST['txtporc2'];
	$brutotl = $_POST['txtbru2'];
	$valor = $_POST['txtvalor2'];
	$botellas = $_POST['txtbotellas2'];
	$litros = $_POST['txtlitros2'];
	$alicuota = $_POST['txtalicuota2'];
	$elc = $_POST['txtelc2'];
	$pbc = $_POST['txtpbc2'];
	$cif = $_POST['txtcif2'];
	$dai = $_POST['txtdai2'];
	$flete = $_POST['txtflete12'];
	$seguros = $_POST['txtseguros12'];
	$gastos = $_POST['txtgastos12'];
	$porcali = $_POST['txtporcalc2'];
	$porcelc = $_POST['txtporcelc2'];
	$porcdai = $_POST['txtporcdai2'];
	$tipo = utf8_decode($_POST['cmbtipo2']);
	$empresa = utf8_decode($_POST['cmbempre2']);
	$id = null;
	$id = $_POST['id3'];
	$idTipo = null;
	$idEmpre = null;
	$idDM = null;
	$st = $cn->prepare("SELECT id_tipo_merc FROM tipo_mercancias WHERE nombre_tipo_mercancia = ?");
	$st->bindParam(1, $tipo);
	$st->execute();
	$result = $st->fetch();
	$idTipo = $result['id_tipo_merc'];
	$st = $cn->prepare("SELECT id_empresa FROM empresas WHERE nombre_empresa = ?");
	$st->bindParam(1, $empresa);
	$st->execute();
	$result1 = $st->fetch();
	$idEmpre = $result1['id_empresa'];
	$st = $cn->prepare("SELECT id_dm FROM numerosdm WHERE numero_dm = ?");
	$st->bindParam(1, $dmnumero);
	$st->execute();
	$result2 = $st->fetch();
	$idDM = $result2['id_dm'];
	$st = $cn->prepare("UPDATE mercancias SET codigo_merc = ?, nombre_merc = ?, cant_cajas_merc = ?,
	precio_unitario_merc = ?, valor_merc = ?, precio_venta_merc = ?, cant_caja_merc = ?, ml_merc = ?, porc_alch_merc = ?,
	botellas = ?, litros = ?, bruto_ti_merc = ?, pbc = ?, porc_alic = ?, alicuota = ?, porc_elc = ?, elc = ?, flete = ?, seguro = ?, gastos = ?, cif = ?, porc_dai = ?, dai = ?, id_tipo_merc = ?, id_empresa = ?, id_dm = ? WHERE id_merc = ?");
	$st->bindParam(1, $codigomerc);
	$st->bindParam(2, $nombre);
	$st->bindParam(3, $numcajas);
	$st->bindParam(4, $preciou);
	$st->bindParam(5, $valor);
	$st->bindParam(6, $preciov);
	$st->bindParam(7, $cantxcaja);
	$st->bindParam(8, $ml);
	$st->bindParam(9, $porcalc);
	$st->bindParam(10, $botellas);
	$st->bindParam(11, $litros);
	$st->bindParam(12, $brutotl);
	$st->bindParam(13, $pbc);
	$st->bindParam(14, $porcali);
	$st->bindParam(15, $alicuota);
	$st->bindParam(16, $porcelc);
	$st->bindParam(17, $elc);
	$st->bindParam(18, $flete);
	$st->bindParam(19, $seguros);
	$st->bindParam(20, $gastos);
	$st->bindParam(21, $cif);
	$st->bindParam(22, $porcdai);
	$st->bindParam(23, $dai);
	$st->bindParam(24, $idTipo);
	$st->bindParam(25, $idEmpre);
	$st->bindParam(26, $idDM);
	$st->bindParam(27, $id);
	if ($st->execute()) {
		echo 1;
	}else{
		echo 2;
	}
?>
