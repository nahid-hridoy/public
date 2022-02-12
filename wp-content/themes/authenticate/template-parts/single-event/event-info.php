<?php

    //event-type-status
    $event_status = get_field( 'select_event_status' );
    $event_type = get_field( 'event_type' );

    //date
    $event_start_date = get_field( 'start_ev_date_time' );
    $event_end_date = get_field( 'end_ev_date_time' );

    $eventDateStart = strtotime(get_field('start_ev_date_time'));
    $eventDateEnd = strtotime(get_field('end_ev_date_time'));
    
    //location
    $event_location = get_field( 'ev_location' );

    //time
    $event_start_time = get_field( 'acfname' );
    $event_end_time = get_field( 'acfname' );

    //Hero Area
    $event_hero_bg = get_field( 'ev_hero_background_image' );

    //Speakers
    $event_speakers = get_field( 'acfname' );

    //sessions
    $event_sessions_hours = get_field( 'acfname' );
    $event_sessions = get_field( 'acfname' );
    //
    $event_start_date = get_field( 'acfname' );
    $event_start_date = get_field( 'acfname' );

    //countdown timer
    $event_timer_info = get_field( 'acfname' );



?>