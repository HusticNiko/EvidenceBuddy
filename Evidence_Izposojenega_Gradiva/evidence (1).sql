CREATE TABLE `evidenca` (
  `ID` int(11) NOT NULL,
  `imeevidence` varchar(45) COLLATE utf8mb4_slovenian_ci NOT NULL,
  `pot` varchar(45) COLLATE utf8mb4_slovenian_ci NOT NULL,
  `opis` varchar(45) COLLATE utf8mb4_slovenian_ci NOT NULL,
  `status_gradiva` varchar(45) COLLATE utf8mb4_slovenian_ci NOT NULL,
  `tk_uporabnik` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;



CREATE TABLE `izposoja` (
  `ID` int(11) NOT NULL,
  `datum` date NOT NULL,
  `tk_uporabnik` int(45) NOT NULL,
  `tk_evidenca` int(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;



CREATE TABLE `uporabnik` (
  `ID` int(11) NOT NULL,
  `ime` varchar(20) COLLATE utf8mb4_slovenian_ci NOT NULL,
  `priimek` varchar(20) COLLATE utf8mb4_slovenian_ci NOT NULL,
  `uporabnisko_ime` varchar(20) COLLATE utf8mb4_slovenian_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_slovenian_ci NOT NULL,
  `geslo` varchar(20) COLLATE utf8mb4_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovenian_ci;


ALTER TABLE `evidenca`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `izposoja`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `uporabnik`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `evidenca`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


ALTER TABLE `izposoja`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


ALTER TABLE `uporabnik`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

