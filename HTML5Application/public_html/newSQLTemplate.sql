SELECT P.nombre, P.apellido, P.cedula, P.puesto, P.Id,H.Fecha 
FROM personal P
LEFT JOIN horarios H ON H.IdEmpleado = P.Id 
WHERE H.IdEmpleado IS NULL
         AND H.Fecha BETWEEN '$fecha1' AND '$fecha2' --Opcion 1 
         --AND H.Fecha >= '$fecha1' AND H.Fecha <='$fecha2' --Opcion 2: Esta linea en lugar de la anterior
        AND WEEKDAY(H.Fecha) NOT IN (5,6) -- que no sea Sabado o Domingo
ORDER BY P.puesto
