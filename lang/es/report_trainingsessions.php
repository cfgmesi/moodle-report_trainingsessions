<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'report_trainingsessions'.
 *
 * @package    report
 * @subpackage trainingsessions
 * @author     Valery Fremaux (valery.fremaux@gmail.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['activitytime'] = 'Tiempo en actividades: ';
$string['advancement'] = 'Advancement';
$string['allcourses'] = 'Todos los cursos';
$string['allgroups'] = 'Todos los grupos';
$string['ashtml'] = 'Formato HTML';
$string['asxls'] = 'Descargar Excel';
$string['checklistadvice'] = 'Special side completion effects';
$string['chooseagroup'] = 'Elige un grupo';
$string['chooseaninstitution'] = 'Elige una institución';
$string['connections'] = 'Conexiones';
$string['course'] = 'Curso';
$string['courseglobals'] = 'Areas globales del curso';
$string['coursename'] = 'Nombre del grupo';
$string['courseraw'] = 'Exportar a CSV';
$string['done'] = 'Visitado: ';
$string['duration'] = 'Duración';
$string['elapsed'] = 'Tiempo total';
$string['enddate'] = 'Fecha fin';
$string['equlearningtime'] = 'Tiempo de formación equivalente: ';
$string['errorbadcoursestructure'] = 'Error en la estructura del curso : bad id {$a}';
$string['errorbadviewid'] = 'No existe informe';
$string['errorcoursestructurefirstpage'] = 'Error en  la estructura del curso : fallo obteniendo la primera página';
$string['errorcoursetoolarge'] = 'Curso demasiado grande, Elija un grupo';
$string['firstconnection'] = 'Primera conexión';
$string['firstenrolldate'] = 'Primera inscripción';
$string['firstname'] = 'Nombre: ';
$string['generateXLS'] = 'Generar fichero XLS';
$string['generatereports'] = 'Generar informes';
$string['headsection'] = 'Encabezado';
$string['hits'] = 'Hits';
$string['incourses'] = 'En cursos';
$string['institution'] = 'Institución';
$string['institutions'] = 'Instituciones';
$string['instructure'] = 'Tiempo invertido dentro de la estructura';
$string['item'] = 'Item';
$string['lastname'] = 'Apellido';
$string['nodata'] = 'No hay datos del curso';
$string['nopermissiontoview'] = 'Usted no tiene suficientes permisos en este curso para ver esta información.';
$string['nosessions'] = 'No hay datos de sesión medibles';
$string['nostructure'] = 'No hay estructura del curso detectada';
$string['outofstructure'] = 'Tiempo invertido fuera de la estructura';
$string['outofgroup'] = 'Fuera de grupo';
$string['over'] = 'over';
$string['parts'] = 'parts';
$string['pluginname'] = 'Sesiones de formación';
$string['reports'] = 'Informes';
$string['role'] = 'Rol';
$string['sectionname'] = 'Nombre sección';
$string['seedetails'] = 'Ver detalles';
$string['selectforreport'] = 'Incluir en los informes';
$string['sessionend'] = 'Fin de sesión';
$string['sessionreports'] = 'Informe de sesión de usuario';
$string['sessions'] = 'Sesiones de trabajo';
$string['sessionstart'] = 'Comienzo de sesión';
$string['startdate'] = 'Fecha de comienzo';
$string['timeelapsed'] = 'Tiempo invertido';
$string['timeelapsedcurweek'] = 'Tiempo invertido por semana';
$string['timeperpart'] = 'Tiempo transcurrido por parte';
$string['todate'] = 'Fecha fin';
$string['totalduration'] = 'Duración total';
$string['totalsessiontime'] = 'Tiempo total trabajado en las sesiones';
$string['totalsessiontime_help'] = 'Tenga en cuenta que la lista sesión cuenta con unos duraciones que pueden estar fuera de este curso. El tiempo total de la sesión por lo general debe ser mayor que en el cálculo del tiempo del curso';
$string['totalsessions'] = 'Tiempo total de sesión';
$string['trainingreports'] = 'Informes de formación';
$string['trainingsessions'] = 'Sesiones de formación';
$string['trainingsessions:view'] = 'Ver informe de la sesión de formación';
$string['trainingsessions:viewother'] = 'Ver informe de la sesión de formación de otros usuarios';
$string['trainingsessions:iscompiled'] = 'Se compila en informes';
$string['trainingsessions_report_advancement'] = 'Informe de progreso';
$string['trainingsessions_report_connections'] = 'Informe de conexión';
$string['trainingsessions_report_institutions'] = 'Informe de institución';
$string['trainingsessionsreport'] = 'Informes de sesión de formación';
$string['unvisited'] = 'No visitadao';
$string['updatefromaccountstart'] = 'Obtener desde el primer acceso del usuario';
$string['updatefromcoursestart'] = 'Obtener desde el comienzo del curso';
$string['uploadglobals'] = 'Archivos subidos';
$string['uploadresult'] = 'Download raw results';
$string['user'] = 'Por participante';
$string['weekstartdate'] = 'Inicio de semana';
$string['workingsessions'] = 'Sesiones de trabajo: ';
$string['csvoutputtoiso'] = 'Salida de CSV';
$string['csvoutputtoiso_desc'] = 'Si está habilitado, se generará el informe con la codificación ISO-8859-1 para aplicaciones antiguas compatibles con CSV.';

$string['activitytime_help'] = '
<p>This time calculation considers all use time spent in course activities, letting course 
	layout times out of calculation. In certain cases (when using the (reworked) Checklist with
	standard time allocation (http://github.com/vfremaux/moodle-mod_checklist.git), additional 
	standard time are used rather than real extracted times from log.</p>
';

$string['equlearningtime_help'] = '
<p>Equivalent learning time summarizes all time spent in course, including standard allocation times if
	the reworked Checklist is used (http://github.com/vfremaux/moodle-mod_checklist.git).</p>
';

$string['checklistadvice_help'] = '
<p>When using a checklist module that enables teachers to validate activities without
any student interaction in the course, some apparent information discrepancy may appear.</p>
<p>This is a normal situation that reports consistant information regarding the effective
	use of the platform</p>
';
