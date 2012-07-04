<?php

class ParcoursTireurManager {

	/**
	 * @return array[ParcoursTireur]
	 **/
	public static function getParcoursTireurs($idParcours){
		$parcoursTireurManager["PARCOURS_ID"] = 1;
		$parcoursTireurManager["TIREUR_ID"] = 1;
		$parcoursTireurManager["ORDRE_AFFICHAGE"] = 1;
		$parcoursTireurManager["SCORE"] = 1;
		$parcoursTireurManager["NOM_TIREUR"] = "MATRION Gérard";
		$array[] = new ParcoursTireurManager($parcoursTireurManager);

		$parcoursTireurManager["PARCOURS_ID"] = 1;
		$parcoursTireurManager["TIREUR_ID"] = 2;
		$parcoursTireurManager["ORDRE_AFFICHAGE"] = 3;
		$parcoursTireurManager["SCORE"] = 25;
		$parcoursTireurManager["NOM_TIREUR"] = "MATRION Michel";
		$array[] = new ParcoursTireurManager($parcoursTireurManager);

		$parcoursTireurManager["PARCOURS_ID"] = 1;
		$parcoursTireurManager["TIREUR_ID"] = 3;
		$parcoursTireurManager["ORDRE_AFFICHAGE"] = 3;
		$parcoursTireurManager["SCORE"] = 20;
		$parcoursTireurManager["NOM_TIREUR"] = "MATRION Sébastien";
		$array[] = new ParcoursTireurManager($parcoursTireurManager);
		return $array;
	}
}