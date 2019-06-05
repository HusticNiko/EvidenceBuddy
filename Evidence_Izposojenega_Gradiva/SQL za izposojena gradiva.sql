SELECT e.imeevidence, i.datum, u.uporabnisko_ime
FROM izposoja i
INNER JOIN uporabnik u ON i.tk_uporabnik = u.ID
INNER JOIN evidenca e ON i.tk_evidenca = e.ID
WHERE e.tk_uporabnik = '".$loggin_session."'
AND e.status_gradiva = 'IZPOSOJENO';