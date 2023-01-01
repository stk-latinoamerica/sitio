<?php

function setTrack($getvar) {
	if ($getvar)
	{
		return $_GET["track"];
	}
	return $_POST["track"];
}

function sanityCheck($var)
{
  switch ($var)
  {
    case 'addon_---3d-':
    case 'addon_a-e-a-arena':
    case 'addon_a-tunnel_1':
    case 'addon_abandoned-city':
    case 'addon_about-the-garage':
    case 'addon_abyss--soccer-':
    case 'addon_advanced-course':
    case 'addon_adventure-track':
    case 'addon_aidenvek-volcan-island_1':
    case 'addon_air-hockey':
    case 'addon_alien-playground':
    case 'addon_alpine-2_1':
    case 'addon_alt-tournament-field':
    case 'addon_alternate-mine_2':
    case 'addon_altura-geohatia':
    case 'addon_amazonian-journey':
    case 'addon_ampfing':
    case 'addon_amphitheatre':
    case 'addon_ample-anthill':
    case 'addon_ancient-colosseum-labyrinth':
    case 'addon_ancient-summits':
    case 'addon_animtrack_1':
    case 'addon_another-soccer-field':
    case 'addon_antarticy':
    case 'addon_aquadromo':
    case 'addon_ardennen-spa':
    case 'addon_area-498':
    case 'addon_around-the-box_2':
    case 'addon_around-the-forest-lake':
    case 'addon_art-museum':
    case 'addon_asteroid-soccer':
    case 'addon_at-the-top-of-the-volcano':
    case 'addon_at-the-top-of-the-volcano_1':
    case 'addon_autodromo-lombaro':
    case 'addon_babyfball':
    case 'addon_baseball-field':
    case 'addon_battle-island--redesign-':
    case 'addon_battle-space':
    case 'addon_battleisland-soccer':
    case 'addon_bbr-01':
    case 'addon_bbr-04':
    case 'addon_beach-soccer-stadium':
    case 'addon_beam-runner_1':
    case 'addon_bebelious-circuit-1':
    case 'addon_bebelious-circuit-2':
    case 'addon_beehive--beta-':
    case 'addon_bizarre-darkness':
    case 'addon_black-forest':
    case 'addon_black_forest--superlight':
    case 'addon_blackhill-mansion':
    case 'addon_blooming-start':
    case 'addon_bloontonium-mines':
    case 'addon_bonebreaker':
    case 'addon_boomyeet-circuit':
    case 'addon_bouncy-plungers':
    case 'addon_bovine-barnyard_1':
    case 'addon_bowling':
    case 'addon_box':
    case 'addon_brondehach':
    case 'addon_calm-village':
    case 'addon_canyon-42':
    case 'addon_carnaval-del-cacao':
    case 'addon_carousel':
    case 'addon_cartoon-track--error-':
    case 'addon_cave-x--redesign-':
    case 'addon_cave-x-soccer':
    case 'addon_centup-meshurion':
    case 'addon_champs-castle':
    case 'addon_charmey':
    case 'addon_cheat-cake':
    case 'addon_chemisay':
    case 'addon_china':
    case 'addon_circle-of-destiny':
    case 'addon_circle-of-ubuntu_1':
    case 'addon_city-lights':
    case 'addon_city-lights_1':
    case 'addon_clash-o-8':
    case 'addon_classic-pool':
    case 'addon_classic-race_1':
    case 'addon_classic-subsea':
    case 'addon_classic-tollway_1':
    case 'addon_classic-volcano':
    case 'addon_cocoa-temple--light-':
    case 'addon_color-dream':
    case 'addon_color-road':
    case 'addon_coloseum':
    case 'addon_coloured-space':
    case 'addon_corkscrew':
    case 'addon_cosmic':
    case 'addon_cosmic-ii---vermillion-core':
    case 'addon_coyote-canyon_1':
    case 'addon_crickets-were-here':
    case 'addon_cross-race':
    case 'addon_cube_1':
    case 'addon_cupcake-space-station':
    case 'addon_cyberpark':
    case 'addon_cyberpark0-5':
    case 'addon_cyberpark1-5':
    case 'addon_cyberpark2':
    case 'addon_cz45-dustyrally':
    case 'addon_cz45-hillside':
    case 'addon_cz45-skhaiway':
    case 'addon_dale-tunnel':
    case 'addon_dangerous-mini-plateau':
    case 'addon_database':
    case 'addon_de-dust':
    case 'addon_demolition-bowl':
    case 'addon_demon-ravine':
    case 'addon_devastation-island':
    case 'addon_dirt-1':
    case 'addon_dirt-6':
    case 'addon_dirt-mixed-2':
    case 'addon_dirty-stunts':
    case 'addon_doing-the-dishes':
    case 'addon_down-by-the-river':
    case 'addon_drawing-hacienda_1':
    case 'addon_druid-star':
    case 'addon_dry-sand':
    case 'addon_dyson-speedway':
    case 'addon_dyson-speedway-wip':
    case 'addon_e-zone':
    case 'addon_e-zone---circuit':
    case 'addon_easy-drive':
    case 'addon_egypt_1':
    case 'addon_emerald-arena':
    case 'addon_emule-track':
    case 'addon_ernu--circuit':
    case 'addon_escape-room':
    case 'addon_espie':
    case 'addon_evergreen-forest':
    case 'addon_experimental-plane---arena-a':
    case 'addon_experimental-plane---field-1':
    case 'addon_experimental-plane---field-2':
    case 'addon_experimental-plane---field-3':
    case 'addon_experimental-plane---field-3_old':
    case 'addon_experimental-plane---field-4_1':
    case 'addon_experimental-plane---rl':
    case 'addon_experimental-plane_1':
    case 'addon_extreme-dimension':
    case 'addon_extreme-playground-stadium':
    case 'addon_extreme-run':
    case 'addon_fan':
    case 'addon_fan-magma':
    case 'addon_fast-valley':
    case 'addon_final-gloom':
    case 'addon_finny-splashdown-pool':
    case 'addon_flat-track':
    case 'addon_foggy-mound':
    case 'addon_forest-road':
    case 'addon_forest_1':
    case 'addon_fort-magma-old-stk-0-8-1':
    case 'addon_forza':
    case 'addon_four-paths':
    case 'addon_frozen-drive':
    case 'addon_garguree':
    case 'addon_gears-lane':
    case 'addon_gown-s-bow':
    case 'addon_gown-s-bow--classic-remix-':
    case 'addon_grand-coastia--not-complete--':
    case 'addon_grassy-farmfield':
    case 'addon_gravel-slide':
    case 'addon_gravity-boost':
    case 'addon_gravity-tunnel':
    case 'addon_gravitytrack':
    case 'addon_green-canyon':
    case 'addon_green-hill_1':
    case 'addon_green-valley':
    case 'addon_grubby-tricks':
    case 'addon_hacienda--edit-_1':
    case 'addon_happiz-sadoor':
    case 'addon_happy-birthday':
    case 'addon_hello':
    case 'addon_high-in-the-sky':
    case 'addon_high-mountain-race-track':
    case 'addon_hole-drop':
    case 'addon_holiday4way1':
    case 'addon_huge':
    case 'addon_ice-cube-_1':
    case 'addon_ice-rink_1':
    case 'addon_icy-downhill':
    case 'addon_icy_soccer_field_11':
    case 'addon_igneous-flamezone':
    case 'addon_igneous-playground':
    case 'addon_imminent-cold-effects':
    case 'addon_in-a-cave':
    case 'addon_in-a-pit-ii_1':
    case 'addon_in-the-lair-of-the-volcano':
    case 'addon_in_der_w--ste_1':
    case 'addon_inapit':
    case 'addon_industry':
    case 'addon_interplanetary-war':
    case 'addon_inuksuk--alpine-':
    case 'addon_island-soccer':
    case 'addon_j-plaza':
    case 'addon_jumptrack':
    case 'addon_jungle-2---land-of-the-jumps_1':
    case 'addon_jungle-cave':
    case 'addon_kapman-island-resort':
    case 'addon_karwada':
    case 'addon_kingdom-of-fire':
    case 'addon_knock-knock-phantom':
    case 'addon_kota-lava':
    case 'addon_kristi-s-park':
    case 'addon_labirus':
    case 'addon_lake-ikeal':
    case 'addon_lap-catch':
    case 'addon_las-dunas-stadium':
    case 'addon_laser_soccer':
    case 'addon_lava-fields':
    case 'addon_lava-island_1':
    case 'addon_le-tour-de-l-antarctique':
    case 'addon_leaf-clouds':
    case 'addon_ledneon-town':
    case 'addon_life-in-arctic':
    case 'addon_limits_1':
    case 'addon_linux-mint-soccer':
    case 'addon_ljubljana':
    case 'addon_llsp01_1':
    case 'addon_llsp02':
    case 'addon_llsp03':
    case 'addon_lm-track':
    case 'addon_lost-chasm':
    case 'addon_lost-forest':
    case 'addon_lost-pyramids_2':
    case 'addon_lost-speedway':
    case 'addon_lunar-astrocharge':
    case 'addon_macabre-dunes':
    case 'addon_magic-cross':
    case 'addon_magma-battle':
    case 'addon_mall':
    case 'addon_marble-stage':
    case 'addon_marcel-s-fun-house':
    case 'addon_marine-remains':
    case 'addon_mars-park':
    case 'addon_math-class':
    case 'addon_mega-puck':
    case 'addon_mesa-party':
    case 'addon_metal-chaos':
    case 'addon_migrants':
    case 'addon_milky-five-speedway':
    case 'addon_mine-soccer':
    case 'addon_minigolf':
    case 'addon_minigolf-soccer':
    case 'addon_mlungkermlungker':
    case 'addon_mobius-strip':
    case 'addon_mod-circuit':
    case 'addon_moebius-track':
    case 'addon_moebius-track-2':
    case 'addon_mountain-soccer--updated-':
    case 'addon_mountain-village':
    case 'addon_myoldtrack':
    case 'addon_mystery-island_1':
    case 'addon_mystic-island':
    case 'addon_narrow-woods':
    case 'addon_nasty-void':
    case 'addon_negative-land':
    case 'addon_newfortmagma':
    case 'addon_nexus-void':
    case 'addon_night-by-the-sea':
    case 'addon_nitro-island-':
    case 'addon_nitro-soccer-field':
    case 'addon_nitro-soccer-field--alt-':
    case 'addon_noinexsu-shore':
    case 'addon_nolok-s-factory':
    case 'addon_nostalgia':
    case 'addon_octopus-city':
    case 'addon_oem-cage':
    case 'addon_old-around-the-lighthouse':
    case 'addon_old-crescent-crossing':
    case 'addon_old-england3':
    case 'addon_old-farm_1':
    case 'addon_old-fort-magma_1':
    case 'addon_old-green-hill':
    case 'addon_old-hacienda':
    case 'addon_old-lighthouse':
    case 'addon_old-math-class':
    case 'addon_old-mine--edit-':
    case 'addon_old-minigolf-mischief':
    case 'addon_old-rome':
    case 'addon_old-scotland':
    case 'addon_old-snow-peak':
    case 'addon_old-snowmountain':
    case 'addon_old-star-track':
    case 'addon_old-traditional-shifting-sands':
    case 'addon_old-xr591':
    case 'addon_old-zen-garden_1':
    case 'addon_on-an-iceberg':
    case 'addon_on-the-beach_2':
    case 'addon_on-the-beach_3':
    case 'addon_orbital-simulation---soccer':
    case 'addon_origami-animosity':
    case 'addon_original-shifting-sands':
    case 'addon_ottoscuro':
    case 'addon_palm-coast':
    case 'addon_paper-arena':
    case 'addon_paper-arena-field':
    case 'addon_paradise-peaks':
    case 'addon_parkade':
    case 'addon_parking-drift':
    case 'addon_parking-lot':
    case 'addon_party-in-forest':
    case 'addon_party-in-the-lake_1':
    case 'addon_party-night-forest':
    case 'addon_peaceful-park':
    case 'addon_pi-soccer':
    case 'addon_pinabashi-park':
    case 'addon_pinguino-square':
    case 'addon_pipe-arena':
    case 'addon_pipe-field':
    case 'addon_pipe-track':
    case 'addon_polygon-soccer':
    case 'addon_powder-rush':
    case 'addon_prenzlau-road':
    case 'addon_pyramid-clock':
    case 'addon_quattreo':
    case 'addon_quiet-breeze':
    case 'addon_racetrack':
    case 'addon_racetrack-remake':
    case 'addon_rally-fantasy':
    case 'addon_rammer-s-playground':
    case 'addon_random-roads':
    case 'addon_revublik-track':
    case 'addon_rhomboor':
    case 'addon_ribble-raceway':
    case 'addon_roadraces':
    case 'addon_rock-stadium':
    case 'addon_rocky-polygon':
    case 'addon_roving-city':
    case 'addon_rt1':
    case 'addon_rt1-ernu-circuit':
    case 'addon_rt2-sunset-speedway':
    case 'addon_rt3-pit-time':
    case 'addon_rt4-crowded-stadium':
    case 'addon_rt5-lime-windland':
    case 'addon_salzfelden':
    case 'addon_sandfort':
    case 'addon_sao-paulo':
    case 'addon_scary-swamp':
    case 'addon_scary-swamp-x':
    case 'addon_scrap-grounds':
    case 'addon_screwscraper':
    case 'addon_sea-boardwalk':
    case 'addon_sea-race':
    case 'addon_sea-soccer':
    case 'addon_secret-garden_1':
    case 'addon_sector-5---mini':
    case 'addon_sewer':
    case 'addon_shifting-sands--timewarp-':
    case 'addon_shifting-sands-rework':
    case 'addon_shimotsuma-sweeper':
    case 'addon_shiny-suburbs':
    case 'addon_shipyard-tower':
    case 'addon_simplified-chess-field':
    case 'addon_skate-park':
    case 'addon_sky-soccer':
    case 'addon_skyline':
    case 'addon_skyline--soccer-':
    case 'addon_snooker-table':
    case 'addon_snow':
    case 'addon_weeks':
    case 'addon_snowy-egypt':
    case 'addon_soccer-arena':
    case 'addon_soccer-arena-x':
    case 'addon_sooth-cavern':
    case 'addon_space-cake':
    case 'addon_space-race':
    case 'addon_spatial-intertwining':
    case 'addon_stadium-soccer':
    case 'addon_stadium-spinning-top-soccer':
    case 'addon_stadium-v':
    case 'addon_standoor-elevin':
    case 'addon_stardust-terrains':
    case 'addon_stk-mercury':
    case 'addon_stony-basketball':
    case 'addon_stormy-pier':
    case 'addon_street-hockey':
    case 'addon_subsea':
    case 'addon_subsea-2021-upgrade':
    case 'addon_subsea-basic-in-abyss':
    case 'addon_subsea-soccer':
    case 'addon_sunshine-speedway':
    case 'addon_supertournament-field':
    case 'addon_supertux-canyon':
    case 'addon_supertux-raceway':
    case 'addon_sven-snow-peak':
    case 'addon_sweet-cake':
    case 'addon_syncopia---race-track':
    case 'addon_syncopia--virtual----knockout':
    case 'addon_syncopia-battlegrounds':
    case 'addon_syncopia-stadium':
    case 'addon_tactical-powertank':
    case 'addon_tall-8':
    case 'addon_teamwork_1':
    case 'addon_teknofest-parkur':
    case 'addon_terabite':
    case 'addon_termashein-dragester':
    case 'addon_the-cube_1':
    case 'addon_the-dark-chaos':
    case 'addon_the-farm':
    case 'addon_the-island':
    case 'addon_the-lost-subsea':
    case 'addon_the-old-island_2':
    case 'addon_the-old-mine':
    case 'addon_the-old-west_4':
    case 'addon_the-parking':
    case 'addon_the-plains':
    case 'addon_the-ring':
    case 'addon_the-ring-of-sand':
    case 'addon_the-rock':
    case 'addon_the-valley-of-ice_1':
    case 'addon_the-valley-of-liquorice':
    case 'addon_timberland-dash':
    case 'addon_tiny':
    case 'addon_tournament-field':
    case 'addon_toy-block-raceway':
    case 'addon_tragedry-island':
    case 'addon_tss':
    case 'addon_tux-island':
    case 'addon_tux-island-night':
    case 'addon_tux-island-soccer':
    case 'addon_tux-s-christmas':
    case 'addon_tux-tollway':
    case 'addon_tuxis-wooden-road':
    case 'addon_twisted-library':
    case 'addon_twisted-library-2':
    case 'addon_twisted-library-3':
    case 'addon_twisted-library-4':
    case 'addon_two-towers':
    case 'addon_two-way-road':
    case 'addon_umbilic-torus':
    case 'addon_untested-place':
    case 'addon_usc19':
    case 'addon_usc31':
    case 'addon_usc70':
    case 'addon_usc74':
    case 'addon_valles-marineris':
    case 'addon_valley-house':
    case 'addon_velstoo':
    case 'addon_vivid-vacuum':
    case 'addon_volcan-island':
    case 'addon_volcan-island--2020-upgrade-':
    case 'addon_volcan-island--2020-upgrade-_1':
    case 'addon_volcan-island--iariazlee-_1':
    case 'addon_volcano-island--edit-':
    case 'addon_volcano-remake':
    case 'addon_voxel-village':
    case 'addon_waphin':
    case 'addon_warehouse':
    case 'addon_what-a-great-game':
    case 'addon_what-a-mesh':
    case 'addon_whip-cliff':
    case 'addon_winter-forest':
    case 'addon_wood-warbler-soccer':
    case 'addon_wooded-skyway':
    case 'addon_wooden_soccer':
    case 'addon_woodromo':
    case 'addon_wreckboor':
    case 'addon_wrecktrack':
    case 'addon_x-kart-1':
    case 'addon_x-treme-track':
    case 'addon_xr-4r3n4_1':
    case 'addon_xuniav':
    case 'addon_yenbas':
    case 'addon_yes-i-m-serious':
    case 'addon_yeskindo-noormimiz':
    case 'addon_zejumio':
    case 'addon_zen':
    case 'abyss':
    case 'alien_signal':
    case 'ancient_colosseum_labyrinth':
    case 'arena_candela_city':
    case 'battleisland':
    case 'black_forest':
    case 'candela_city':
    case 'cave':
    case 'cocoa_temple':
    case 'cornfield_crossing':
    case 'endcutscene':
    case 'featunlocked':
    case 'fortmagma':
    case 'gplose':
    case 'gpwin':
    case 'gran_paradiso_island':
    case 'hacienda':
    case 'hole_drop':
    case 'icy_soccer_field':
    case 'introcutscene':
    case 'introcutscene2':
    case 'lasdunasarena':
    case 'lasdunassoccer':
    case 'lighthouse':
    case 'mines':
    case 'minigolf':
    case 'olivermath':
    case 'overworld':
    case 'pumpkin_park':
    case 'ravenbridge_mansion':
    case 'sandtrack':
    case 'scotland':
    case 'snowmountain':
    case 'snowtuxpeak':
    case 'soccer_field':
    case 'stadium':
    case 'stk_enterprise':
    case 'temple':
    case 'tutorial':
    case 'volcano_island':
    case 'xr591':
    case 'zengarden':
    case '':
      return true;
      break;
    default:
      exit('<h2>Variáveis inválidas</h2>');
      return false;
  }
}

class MyDB extends SQLite3
{
	function __construct()
	{
		$this->open($_SERVER["DOCUMENT_ROOT"] . '/assets/database.db', SQLITE3_OPEN_READONLY);
	}
}
?>