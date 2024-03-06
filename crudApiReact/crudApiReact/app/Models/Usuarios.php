<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'usuarios';
    protected $fillable = [
        'COD_USUARIO',
        'TIP_DOCUMENTO',
        'NUM_DOCUMENTO',
        'COD_ESTADO',
        'NOM_USUARIO',
        'PWD_USUARIO',
        'FEC_EXPIRACION',
        'NIV_USUARIO',
        'USU_LOGUEADO',
        'ULT_FEC_LOG',
        'COD_OFICINA',
        'COD_REGIONAL',
        'COD_CARGO',
        'NUM_CONSECUTIVO',
        'COD_IMG_FIRMA',
        'COD_AREA',
        'COD_ESTADO_WEB',
        'PWD_USUARIO_WEB',
        'EMAIL',
        'PROCESO_AUDITORIA_CM',
        'CODIGO_TOKEN',
        'PRIMER_NOMBRE',
        'SEGUNDO_NOMBRE',
        'PRIMER_APELLIDO',
        'SEGUNDO_APELLIDO',
        'FECHA_NACIMIENTO',
        'RH',
        'DIRECCION',
        'DEPARTAMENTO',
        'MUNICIPIO',
        'TELEFONO1',
        'TELEFONO2',
        'EMAIL_PERSONAL',
        'FECHA_INGRESO',
        'FECHA_EGRESO',
        'GENERO',
        'SALARIO',
        'F_PENSION',
        'EPS',
        'CESANTIAS',
        'CAJA_COMPENSACION',
        'ARL',
        'ESTADO_FUNCIONARIO_NOMINA',
        'PORCENTAJE_ARL',
        'JUSTIFICACION_ESTADO',
        'USUARIO_MODIFICA',
        'FECHA_MODIFICACION',
        'DOC_FECHA_EXPEDICION',
        'DOC_DPT_EXPEDICION',
        'DOC_MUN_EXPEDICION',
        'COD_NACIONALIDAD',
        'BANCO',
        'CUENTA_BANCARIA',
        'TIPO_CONTRATO',
        'PASSWORD_WEB',
    ];
    use HasFactory;
}
