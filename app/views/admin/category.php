<?php
  $edit = false;
  if (array_key_exists('dataEditCategoria', $data)){
    $edit = true;
  }
?>
<div>
  <a href="#modalCategoria" class="waves-effect waves-light btn modal-trigger right">Nueva categoría</a>
</div>
<p style="margin-left: 1rem;">Categorías creadas:</p>
<ul class="collection with-header">
  <?php if(empty($data['categorias'])){ ?>
    <li class="collection-item">Sin categorias creadas aún</li>
  <?php }else{ ?>
    <?php foreach ($data['categorias'] as $categoria) : ?>
      <li class="collection-item">
        <div>
          <i class="tiny material-icons"><?php echo $categoria->icono; ?></i>
          <?php echo $categoria->category_titulo; ?>
          <a href="#eliminar" name="<?php echo $categoria->id_categoria; ?>" class="secondary-content modal-trigger botonesBorrar"><i class="tiny material-icons">delete</i></a>
          <a href="<?php echo RUTA_URL."/admin/editCategory/".$categoria->id_categoria; ?>" class="secondary-content"><i class="tiny material-icons">edit</i></a>
        </div>
      </li>
    <?php endforeach; ?>
  <?php } ?>
</ul>

<div id="eliminar" class="modal">
  <div class="modal-content">
    <h4>Eliminar<hr></h4>
      <p>¿Estás seguro de eliminar esta categoría?</p>
  </div>
  <div class="modal-footer">
    <a id="buttonDelete" class="modal-close waves-effect waves-light lighten-1 btn">Eliminar</a>
    <a href="#" class="modal-close waves-effect waves-light grey lighten-1 btn">Cancelar</a>
  </div>
</div>

<div id="modalCategoria" class="modal">
  <div class="modal-content">
    <?php if($edit){ ?>
      <div style="background: rgba(3, 3, 3, .3); text-shadow: 1px 1px #000000;">
        Modificar categoría:
      </div>
      <form action="<?php echo RUTA_URL.'/admin/editCategory/'.$data['dataEditCategoria']['id_categoria']; ?>" method="post">
    <?php }else{ ?>
      Crear nueva categoría:
      <form action="<?php echo RUTA_URL?>/admin/insertCategory" method="post">
    <?php } ?>
    <div class="row">
        <div class="col s12 input-field">
          <?php if($edit){ ?>
            <input value="<?php echo $data['dataEditCategoria']['category_titulo']; ?>" name="titulo" id="titulo" type="text" required>
          <?php }else{ ?>
            <input name="titulo" id="titulo" type="text" required>
          <?php } ?>
          <label for="titulo">Introduzca título</label>
        </div>
        <!-- <div class="col s6 input-field">
          <?php if($edit){ ?>
            <input value="<?php echo $data['dataEditCategoria']['icono']; ?>" name="icono" id="icono" type="text">
          <?php }else{ ?>
            <input name="icono" id="icono" type="text">
          <?php } ?>
          <label for="icono">Icono</label>
        </div> -->
        <div class="col s12 input-field">
          <i class="material-icons small teal-text">3d_rotation</i>
          <i class="material-icons small teal-text">ac_unit</i>
          <i class="material-icons small teal-text">access_alarm</i>
          <i class="material-icons small teal-text">access_alarms</i>
          <i class="material-icons small teal-text">access_time</i>
          <i class="material-icons small teal-text">accessibility</i>
          <i class="material-icons small teal-text">accessible</i>
          <i class="material-icons small teal-text">account_balance</i>
          <i class="material-icons small teal-text">account_balance_wallet</i>
          <i class="material-icons small teal-text">account_box</i>
          <i class="material-icons small teal-text">account_circle</i>
          <i class="material-icons small teal-text">adb</i>
          <i class="material-icons small teal-text">add</i>
          <i class="material-icons small teal-text">add_a_photo</i>
          <i class="material-icons small teal-text">add_alarm</i>
          <i class="material-icons small teal-text">add_alert</i>
          <i class="material-icons small teal-text">add_box</i>
          <i class="material-icons small teal-text">add_circle</i>
          <i class="material-icons small teal-text">add_circle_outline</i>
          <i class="material-icons small teal-text">add_location</i>
          <i class="material-icons small teal-text">add_shopping_cart</i>
          <i class="material-icons small teal-text">add_to_photos</i>
          <i class="material-icons small teal-text">add_to_queue</i>
          <i class="material-icons small teal-text">adjust</i>
          <i class="material-icons small teal-text">airline_seat_flat</i>
          <i class="material-icons small teal-text">airline_seat_flat_angled</i>
          <i class="material-icons small teal-text">airline_seat_individual_suite</i>
          <i class="material-icons small teal-text">airline_seat_legroom_extra</i>
          <i class="material-icons small teal-text">airline_seat_legroom_normal</i>
          <i class="material-icons small teal-text">airline_seat_legroom_reduced</i>
          <i class="material-icons small teal-text">airline_seat_recline_extra</i>
          <i class="material-icons small teal-text">airline_seat_recline_normal</i>
          <i class="material-icons small teal-text">airplanemode_active</i>
          <i class="material-icons small teal-text">airplanemode_inactive</i>
          <i class="material-icons small teal-text">airplay</i>
          <i class="material-icons small teal-text">airport_shuttle</i>
          <i class="material-icons small teal-text">alarm</i>
          <i class="material-icons small teal-text">alarm_add</i>
          <i class="material-icons small teal-text">alarm_off</i>
          <i class="material-icons small teal-text">alarm_on</i>
          <i class="material-icons small teal-text">album</i>
          <i class="material-icons small teal-text">all_inclusive</i>
          <i class="material-icons small teal-text">all_out</i>
          <i class="material-icons small teal-text">android</i>
          <i class="material-icons small teal-text">announcement</i>
          <i class="material-icons small teal-text">apps</i>
          <i class="material-icons small teal-text">archive</i>
          <i class="material-icons small teal-text">arrow_back</i>
          <i class="material-icons small teal-text">arrow_downward</i>
          <i class="material-icons small teal-text">arrow_drop_down</i>
          <i class="material-icons small teal-text">arrow_drop_down_circle</i>
          <i class="material-icons small teal-text">arrow_drop_up</i>
          <i class="material-icons small teal-text">arrow_forward</i>
          <i class="material-icons small teal-text">arrow_upward</i>
          <i class="material-icons small teal-text">art_track</i>
          <i class="material-icons small teal-text">aspect_ratio</i>
          <i class="material-icons small teal-text">assessment</i>
          <i class="material-icons small teal-text">assignment</i>
          <i class="material-icons small teal-text">assignment_ind</i>
          <i class="material-icons small teal-text">assignment_late</i>
          <i class="material-icons small teal-text">assignment_return</i>
          <i class="material-icons small teal-text">assignment_returned</i>
          <i class="material-icons small teal-text">assignment_turned_in</i>
          <i class="material-icons small teal-text">assistant</i>
          <i class="material-icons small teal-text">assistant_photo</i>
          <i class="material-icons small teal-text">attach_file</i>
          <i class="material-icons small teal-text">attach_money</i>
          <i class="material-icons small teal-text">attachment</i>
          <i class="material-icons small teal-text">audiotrack</i>
          <i class="material-icons small teal-text">autorenew</i>
          <i class="material-icons small teal-text">av_timer</i>
          <i class="material-icons small teal-text">backspace</i>
          <i class="material-icons small teal-text">backup</i>
          <i class="material-icons small teal-text">battery_alert</i>
          <i class="material-icons small teal-text">battery_charging_full</i>
          <i class="material-icons small teal-text">battery_full</i>
          <i class="material-icons small teal-text">battery_std</i>
          <i class="material-icons small teal-text">battery_unknown</i>
          <i class="material-icons small teal-text">beach_access</i>
          <i class="material-icons small teal-text">beenhere</i>
          <i class="material-icons small teal-text">block</i>
          <i class="material-icons small teal-text">bluetooth</i>
          <i class="material-icons small teal-text">bluetooth_audio</i>
          <i class="material-icons small teal-text">bluetooth_connected</i>
          <i class="material-icons small teal-text">bluetooth_disabled</i>
          <i class="material-icons small teal-text">bluetooth_searching</i>
          <i class="material-icons small teal-text">blur_circular</i>
          <i class="material-icons small teal-text">blur_linear</i>
          <i class="material-icons small teal-text">blur_off</i>
          <i class="material-icons small teal-text">blur_on</i>
          <i class="material-icons small teal-text">book</i>
          <i class="material-icons small teal-text">bookmark</i>
          <i class="material-icons small teal-text">bookmark_border</i>
          <i class="material-icons small teal-text">border_all</i>
          <i class="material-icons small teal-text">border_bottom</i>
          <i class="material-icons small teal-text">border_clear</i>
          <i class="material-icons small teal-text">border_color</i>
          <i class="material-icons small teal-text">border_horizontal</i>
          <i class="material-icons small teal-text">border_inner</i>
          <i class="material-icons small teal-text">border_left</i>
          <i class="material-icons small teal-text">border_outer</i>
          <i class="material-icons small teal-text">border_right</i>
          <i class="material-icons small teal-text">border_style</i>
          <i class="material-icons small teal-text">border_top</i>
          <i class="material-icons small teal-text">border_vertical</i>
          <i class="material-icons small teal-text">branding_watermark</i>
          <i class="material-icons small teal-text">brightness_1</i>
          <i class="material-icons small teal-text">brightness_2</i>
          <i class="material-icons small teal-text">brightness_3</i>
          <i class="material-icons small teal-text">brightness_4</i>
          <i class="material-icons small teal-text">brightness_5</i>
          <i class="material-icons small teal-text">brightness_6</i>
          <i class="material-icons small teal-text">brightness_7</i>
          <i class="material-icons small teal-text">brightness_auto</i>
          <i class="material-icons small teal-text">brightness_high</i>
          <i class="material-icons small teal-text">brightness_low</i>
          <i class="material-icons small teal-text">brightness_medium</i>
          <i class="material-icons small teal-text">broken_image</i>
          <i class="material-icons small teal-text">brush</i>
          <i class="material-icons small teal-text">bubble_chart</i>
          <i class="material-icons small teal-text">bug_report</i>
          <i class="material-icons small teal-text">build</i>
          <i class="material-icons small teal-text">burst_mode</i>
          <i class="material-icons small teal-text">business</i>
          <i class="material-icons small teal-text">business_center</i>
          <i class="material-icons small teal-text">cached</i>
          <i class="material-icons small teal-text">cake</i>
          <i class="material-icons small teal-text">call</i>
          <i class="material-icons small teal-text">call_end</i>
          <i class="material-icons small teal-text">call_made</i>
          <i class="material-icons small teal-text">call_merge</i>
          <i class="material-icons small teal-text">call_missed</i>
          <i class="material-icons small teal-text">call_missed_outgoing</i>
          <i class="material-icons small teal-text">call_received</i>
          <i class="material-icons small teal-text">call_split</i>
          <i class="material-icons small teal-text">call_to_action</i>
          <i class="material-icons small teal-text">camera</i>
          <i class="material-icons small teal-text">camera_alt</i>
          <i class="material-icons small teal-text">camera_enhance</i>
          <i class="material-icons small teal-text">camera_front</i>
          <i class="material-icons small teal-text">camera_rear</i>
          <i class="material-icons small teal-text">camera_roll</i>
          <i class="material-icons small teal-text">cancel</i>
          <i class="material-icons small teal-text">card_giftcard</i>
          <i class="material-icons small teal-text">card_membership</i>
          <i class="material-icons small teal-text">card_travel</i>
          <i class="material-icons small teal-text">casino</i>
          <i class="material-icons small teal-text">cast</i>
          <i class="material-icons small teal-text">cast_connected</i>
          <i class="material-icons small teal-text">center_focus_strong</i>
          <i class="material-icons small teal-text">center_focus_weak</i>
          <i class="material-icons small teal-text">change_history</i>
          <i class="material-icons small teal-text">chat</i>
          <i class="material-icons small teal-text">chat_bubble</i>
          <i class="material-icons small teal-text">chat_bubble_outline</i>
          <i class="material-icons small teal-text">check</i>
          <i class="material-icons small teal-text">check_box</i>
          <i class="material-icons small teal-text">check_box_outline_blank</i>
          <i class="material-icons small teal-text">check_circle</i>
          <i class="material-icons small teal-text">chevron_left</i>
          <i class="material-icons small teal-text">chevron_right</i>
          <i class="material-icons small teal-text">child_care</i>
          <i class="material-icons small teal-text">child_friendly</i>
          <i class="material-icons small teal-text">chrome_reader_mode</i>
          <i class="material-icons small teal-text">class</i>
          <i class="material-icons small teal-text">clear</i>
          <i class="material-icons small teal-text">clear_all</i>
          <i class="material-icons small teal-text">close</i>
          <i class="material-icons small teal-text">closed_caption</i>
          <i class="material-icons small teal-text">cloud</i>
          <i class="material-icons small teal-text">cloud_circle</i>
          <i class="material-icons small teal-text">cloud_done</i>
          <i class="material-icons small teal-text">cloud_download</i>
          <i class="material-icons small teal-text">cloud_off</i>
          <i class="material-icons small teal-text">cloud_queue</i>
          <i class="material-icons small teal-text">cloud_upload</i>
          <i class="material-icons small teal-text">code</i>
          <i class="material-icons small teal-text">collections</i>
          <i class="material-icons small teal-text">collections_bookmark</i>
          <i class="material-icons small teal-text">color_lens</i>
          <i class="material-icons small teal-text">colorize</i>
          <i class="material-icons small teal-text">comment</i>
          <i class="material-icons small teal-text">compare</i>
          <i class="material-icons small teal-text">compare_arrows</i>
          <i class="material-icons small teal-text">computer</i>
          <i class="material-icons small teal-text">confirmation_number</i>
          <i class="material-icons small teal-text">contact_mail</i>
          <i class="material-icons small teal-text">contact_phone</i>
          <i class="material-icons small teal-text">contacts</i>
          <i class="material-icons small teal-text">content_copy</i>
          <i class="material-icons small teal-text">content_cut</i>
          <i class="material-icons small teal-text">content_paste</i>
          <i class="material-icons small teal-text">control_point</i>
          <i class="material-icons small teal-text">control_point_duplicate</i>
          <i class="material-icons small teal-text">copyright</i>
          <i class="material-icons small teal-text">create</i>
          <i class="material-icons small teal-text">create_new_folder</i>
          <i class="material-icons small teal-text">credit_card</i>
          <i class="material-icons small teal-text">crop</i>
          <i class="material-icons small teal-text">crop_16_9</i>
          <i class="material-icons small teal-text">crop_3_2</i>
          <i class="material-icons small teal-text">crop_5_4</i>
          <i class="material-icons small teal-text">crop_7_5</i>
          <i class="material-icons small teal-text">crop_din</i>
          <i class="material-icons small teal-text">crop_free</i>
          <i class="material-icons small teal-text">crop_landscape</i>
          <i class="material-icons small teal-text">crop_original</i>
          <i class="material-icons small teal-text">crop_portrait</i>
          <i class="material-icons small teal-text">crop_rotate</i>
          <i class="material-icons small teal-text">crop_square</i>
          <i class="material-icons small teal-text">dashboard</i>
          <i class="material-icons small teal-text">data_usage</i>
          <i class="material-icons small teal-text">date_range</i>
          <i class="material-icons small teal-text">dehaze</i>
          <i class="material-icons small teal-text">delete</i>
          <i class="material-icons small teal-text">delete_forever</i>
          <i class="material-icons small teal-text">delete_sweep</i>
          <i class="material-icons small teal-text">description</i>
          <i class="material-icons small teal-text">desktop_mac</i>
          <i class="material-icons small teal-text">desktop_windows</i>
          <i class="material-icons small teal-text">details</i>
          <i class="material-icons small teal-text">developer_board</i>
          <i class="material-icons small teal-text">developer_mode</i>
          <i class="material-icons small teal-text">device_hub</i>
          <i class="material-icons small teal-text">devices</i>
          <i class="material-icons small teal-text">devices_other</i>
          <i class="material-icons small teal-text">dialer_sip</i>
          <i class="material-icons small teal-text">dialpad</i>
          <i class="material-icons small teal-text">directions</i>
          <i class="material-icons small teal-text">directions_bike</i>
          <i class="material-icons small teal-text">directions_boat</i>
          <i class="material-icons small teal-text">directions_bus</i>
          <i class="material-icons small teal-text">directions_car</i>
          <i class="material-icons small teal-text">directions_railway</i>
          <i class="material-icons small teal-text">directions_run</i>
          <i class="material-icons small teal-text">directions_subway</i>
          <i class="material-icons small teal-text">directions_transit</i>
          <i class="material-icons small teal-text">directions_walk</i>
          <i class="material-icons small teal-text">disc_full</i>
          <i class="material-icons small teal-text">dns</i>
          <i class="material-icons small teal-text">do_not_disturb</i>
          <i class="material-icons small teal-text">do_not_disturb_alt</i>
          <i class="material-icons small teal-text">do_not_disturb_off</i>
          <i class="material-icons small teal-text">do_not_disturb_on</i>
          <i class="material-icons small teal-text">dock</i>
          <i class="material-icons small teal-text">domain</i>
          <i class="material-icons small teal-text">done</i>
          <i class="material-icons small teal-text">done_all</i>
          <i class="material-icons small teal-text">donut_large</i>
          <i class="material-icons small teal-text">donut_small</i>
          <i class="material-icons small teal-text">drafts</i>
          <i class="material-icons small teal-text">drag_handle</i>
          <i class="material-icons small teal-text">drive_eta</i>
          <i class="material-icons small teal-text">dvr</i>
          <i class="material-icons small teal-text">edit</i>
          <i class="material-icons small teal-text">edit_location</i>
          <i class="material-icons small teal-text">eject</i>
          <i class="material-icons small teal-text">email</i>
          <i class="material-icons small teal-text">enhanced_encryption</i>
          <i class="material-icons small teal-text">equalizer</i>
          <i class="material-icons small teal-text">error</i>
          <i class="material-icons small teal-text">error_outline</i>
          <i class="material-icons small teal-text">euro_symbol</i>
          <i class="material-icons small teal-text">ev_station</i>
          <i class="material-icons small teal-text">event</i>
          <i class="material-icons small teal-text">event_available</i>
          <i class="material-icons small teal-text">event_busy</i>
          <i class="material-icons small teal-text">event_note</i>
          <i class="material-icons small teal-text">event_seat</i>
          <i class="material-icons small teal-text">exit_to_app</i>
          <i class="material-icons small teal-text">expand_less</i>
          <i class="material-icons small teal-text">expand_more</i>
          <i class="material-icons small teal-text">explicit</i>
          <i class="material-icons small teal-text">explore</i>
          <i class="material-icons small teal-text">exposure</i>
          <i class="material-icons small teal-text">exposure_neg_1</i>
          <i class="material-icons small teal-text">exposure_neg_2</i>
          <i class="material-icons small teal-text">exposure_plus_1</i>
          <i class="material-icons small teal-text">exposure_plus_2</i>
          <i class="material-icons small teal-text">exposure_zero</i>
          <i class="material-icons small teal-text">extension</i>
          <i class="material-icons small teal-text">face</i>
          <i class="material-icons small teal-text">fast_forward</i>
          <i class="material-icons small teal-text">fast_rewind</i>
          <i class="material-icons small teal-text">favorite</i>
          <i class="material-icons small teal-text">favorite_border</i>
          <i class="material-icons small teal-text">featured_play_list</i>
          <i class="material-icons small teal-text">featured_video</i>
          <i class="material-icons small teal-text">feedback</i>
          <i class="material-icons small teal-text">fiber_dvr</i>
          <i class="material-icons small teal-text">fiber_manual_record</i>
          <i class="material-icons small teal-text">fiber_new</i>
          <i class="material-icons small teal-text">fiber_pin</i>
          <i class="material-icons small teal-text">fiber_smart_record</i>
          <i class="material-icons small teal-text">file_download</i>
          <i class="material-icons small teal-text">file_upload</i>
          <i class="material-icons small teal-text">filter</i>
          <i class="material-icons small teal-text">filter_1</i>
          <i class="material-icons small teal-text">filter_2</i>
          <i class="material-icons small teal-text">filter_3</i>
          <i class="material-icons small teal-text">filter_4</i>
          <i class="material-icons small teal-text">filter_5</i>
          <i class="material-icons small teal-text">filter_6</i>
          <i class="material-icons small teal-text">filter_7</i>
          <i class="material-icons small teal-text">filter_8</i>
          <i class="material-icons small teal-text">filter_9</i>
          <i class="material-icons small teal-text">filter_9_plus</i>
          <i class="material-icons small teal-text">filter_b_and_w</i>
          <i class="material-icons small teal-text">filter_center_focus</i>
          <i class="material-icons small teal-text">filter_drama</i>
          <i class="material-icons small teal-text">filter_frames</i>
          <i class="material-icons small teal-text">filter_hdr</i>
          <i class="material-icons small teal-text">filter_list</i>
          <i class="material-icons small teal-text">filter_none</i>
          <i class="material-icons small teal-text">filter_tilt_shift</i>
          <i class="material-icons small teal-text">filter_vintage</i>
          <i class="material-icons small teal-text">find_in_page</i>
          <i class="material-icons small teal-text">find_replace</i>
          <i class="material-icons small teal-text">fingerprint</i>
          <i class="material-icons small teal-text">first_page</i>
          <i class="material-icons small teal-text">fitness_center</i>
          <i class="material-icons small teal-text">flag</i>
          <i class="material-icons small teal-text">flare</i>
          <i class="material-icons small teal-text">flash_auto</i>
          <i class="material-icons small teal-text">flash_off</i>
          <i class="material-icons small teal-text">flash_on</i>
          <i class="material-icons small teal-text">flight</i>
          <i class="material-icons small teal-text">flight_land</i>
          <i class="material-icons small teal-text">flight_takeoff</i>
          <i class="material-icons small teal-text">flip</i>
          <i class="material-icons small teal-text">flip_to_back</i>
          <i class="material-icons small teal-text">flip_to_front</i>
          <i class="material-icons small teal-text">folder</i>
          <i class="material-icons small teal-text">folder_open</i>
          <i class="material-icons small teal-text">folder_shared</i>
          <i class="material-icons small teal-text">folder_special</i>
          <i class="material-icons small teal-text">font_download</i>
          <i class="material-icons small teal-text">format_align_center</i>
          <i class="material-icons small teal-text">format_align_justify</i>
          <i class="material-icons small teal-text">format_align_left</i>
          <i class="material-icons small teal-text">format_align_right</i>
          <i class="material-icons small teal-text">format_bold</i>
          <i class="material-icons small teal-text">format_clear</i>
          <i class="material-icons small teal-text">format_color_fill</i>
          <i class="material-icons small teal-text">format_color_reset</i>
          <i class="material-icons small teal-text">format_color_text</i>
          <i class="material-icons small teal-text">format_indent_decrease</i>
          <i class="material-icons small teal-text">format_indent_increase</i>
          <i class="material-icons small teal-text">format_italic</i>
          <i class="material-icons small teal-text">format_line_spacing</i>
          <i class="material-icons small teal-text">format_list_bulleted</i>
          <i class="material-icons small teal-text">format_list_numbered</i>
          <i class="material-icons small teal-text">format_paint</i>
          <i class="material-icons small teal-text">format_quote</i>
          <i class="material-icons small teal-text">format_shapes</i>
          <i class="material-icons small teal-text">format_size</i>
          <i class="material-icons small teal-text">format_strikethrough</i>
          <i class="material-icons small teal-text">format_textdirection_l_to_r</i>
          <i class="material-icons small teal-text">format_textdirection_r_to_l</i>
          <i class="material-icons small teal-text">format_underlined</i>
          <i class="material-icons small teal-text">forum</i>
          <i class="material-icons small teal-text">forward</i>
          <i class="material-icons small teal-text">forward_10</i>
          <i class="material-icons small teal-text">forward_30</i>
          <i class="material-icons small teal-text">forward_5</i>
          <i class="material-icons small teal-text">free_breakfast</i>
          <i class="material-icons small teal-text">fullscreen</i>
          <i class="material-icons small teal-text">fullscreen_exit</i>
          <i class="material-icons small teal-text">functions</i>
          <i class="material-icons small teal-text">g_translate</i>
          <i class="material-icons small teal-text">gamepad</i>
          <i class="material-icons small teal-text">games</i>
          <i class="material-icons small teal-text">gavel</i>
          <i class="material-icons small teal-text">gesture</i>
          <i class="material-icons small teal-text">get_app</i>
          <i class="material-icons small teal-text">gif</i>
          <i class="material-icons small teal-text">golf_course</i>
          <i class="material-icons small teal-text">gps_fixed</i>
          <i class="material-icons small teal-text">gps_not_fixed</i>
          <i class="material-icons small teal-text">gps_off</i>
          <i class="material-icons small teal-text">grade</i>
          <i class="material-icons small teal-text">gradient</i>
          <i class="material-icons small teal-text">grain</i>
          <i class="material-icons small teal-text">graphic_eq</i>
          <i class="material-icons small teal-text">grid_off</i>
          <i class="material-icons small teal-text">grid_on</i>
          <i class="material-icons small teal-text">group</i>
          <i class="material-icons small teal-text">group_add</i>
          <i class="material-icons small teal-text">group_work</i>
          <i class="material-icons small teal-text">hd</i>
          <i class="material-icons small teal-text">hdr_off</i>
          <i class="material-icons small teal-text">hdr_on</i>
          <i class="material-icons small teal-text">hdr_strong</i>
          <i class="material-icons small teal-text">hdr_weak</i>
          <i class="material-icons small teal-text">headset</i>
          <i class="material-icons small teal-text">headset_mic</i>
          <i class="material-icons small teal-text">healing</i>
          <i class="material-icons small teal-text">hearing</i>
          <i class="material-icons small teal-text">help</i>
          <i class="material-icons small teal-text">help_outline</i>
          <i class="material-icons small teal-text">high_quality</i>
          <i class="material-icons small teal-text">highlight</i>
          <i class="material-icons small teal-text">highlight_off</i>
          <i class="material-icons small teal-text">history</i>
          <i class="material-icons small teal-text">home</i>
          <i class="material-icons small teal-text">hot_tub</i>
          <i class="material-icons small teal-text">hotel</i>
          <i class="material-icons small teal-text">hourglass_empty</i>
          <i class="material-icons small teal-text">hourglass_full</i>
          <i class="material-icons small teal-text">http</i>
          <i class="material-icons small teal-text">https</i>
          <i class="material-icons small teal-text">image</i>
          <i class="material-icons small teal-text">image_aspect_ratio</i>
          <i class="material-icons small teal-text">import_contacts</i>
          <i class="material-icons small teal-text">import_export</i>
          <i class="material-icons small teal-text">important_devices</i>
          <i class="material-icons small teal-text">inbox</i>
          <i class="material-icons small teal-text">indeterminate_check_box</i>
          <i class="material-icons small teal-text">info</i>
          <i class="material-icons small teal-text">info_outline</i>
          <i class="material-icons small teal-text">input</i>
          <i class="material-icons small teal-text">insert_chart</i>
          <i class="material-icons small teal-text">insert_comment</i>
          <i class="material-icons small teal-text">insert_drive_file</i>
          <i class="material-icons small teal-text">insert_emoticon</i>
          <i class="material-icons small teal-text">insert_invitation</i>
          <i class="material-icons small teal-text">insert_link</i>
          <i class="material-icons small teal-text">insert_photo</i>
          <i class="material-icons small teal-text">invert_colors</i>
          <i class="material-icons small teal-text">invert_colors_off</i>
          <i class="material-icons small teal-text">iso</i>
          <i class="material-icons small teal-text">keyboard</i>
          <i class="material-icons small teal-text">keyboard_arrow_down</i>
          <i class="material-icons small teal-text">keyboard_arrow_left</i>
          <i class="material-icons small teal-text">keyboard_arrow_right</i>
          <i class="material-icons small teal-text">keyboard_arrow_up</i>
          <i class="material-icons small teal-text">keyboard_backspace</i>
          <i class="material-icons small teal-text">keyboard_capslock</i>
          <i class="material-icons small teal-text">keyboard_hide</i>
          <i class="material-icons small teal-text">keyboard_return</i>
          <i class="material-icons small teal-text">keyboard_tab</i>
          <i class="material-icons small teal-text">keyboard_voice</i>
          <i class="material-icons small teal-text">kitchen</i>
          <i class="material-icons small teal-text">label</i>
          <i class="material-icons small teal-text">label_outline</i>
          <i class="material-icons small teal-text">landscape</i>
          <i class="material-icons small teal-text">language</i>
          <i class="material-icons small teal-text">laptop</i>
          <i class="material-icons small teal-text">laptop_chromebook</i>
          <i class="material-icons small teal-text">laptop_mac</i>
          <i class="material-icons small teal-text">laptop_windows</i>
          <i class="material-icons small teal-text">last_page</i>
          <i class="material-icons small teal-text">launch</i>
          <i class="material-icons small teal-text">layers</i>
          <i class="material-icons small teal-text">layers_clear</i>
          <i class="material-icons small teal-text">leak_add</i>
          <i class="material-icons small teal-text">leak_remove</i>
          <i class="material-icons small teal-text">lens</i>
          <i class="material-icons small teal-text">library_add</i>
          <i class="material-icons small teal-text">library_books</i>
          <i class="material-icons small teal-text">library_music</i>
          <i class="material-icons small teal-text">lightbulb_outline</i>
          <i class="material-icons small teal-text">line_style</i>
          <i class="material-icons small teal-text">line_weight</i>
          <i class="material-icons small teal-text">linear_scale</i>
          <i class="material-icons small teal-text">link</i>
          <i class="material-icons small teal-text">linked_camera</i>
          <i class="material-icons small teal-text">list</i>
          <i class="material-icons small teal-text">live_help</i>
          <i class="material-icons small teal-text">live_tv</i>
          <i class="material-icons small teal-text">local_activity</i>
          <i class="material-icons small teal-text">local_airport</i>
          <i class="material-icons small teal-text">local_atm</i>
          <i class="material-icons small teal-text">local_bar</i>
          <i class="material-icons small teal-text">local_cafe</i>
          <i class="material-icons small teal-text">local_car_wash</i>
          <i class="material-icons small teal-text">local_convenience_store</i>
          <i class="material-icons small teal-text">local_dining</i>
          <i class="material-icons small teal-text">local_drink</i>
          <i class="material-icons small teal-text">local_florist</i>
          <i class="material-icons small teal-text">local_gas_station</i>
          <i class="material-icons small teal-text">local_grocery_store</i>
          <i class="material-icons small teal-text">local_hospital</i>
          <i class="material-icons small teal-text">local_hotel</i>
          <i class="material-icons small teal-text">local_laundry_service</i>
          <i class="material-icons small teal-text">local_library</i>
          <i class="material-icons small teal-text">local_mall</i>
          <i class="material-icons small teal-text">local_movies</i>
          <i class="material-icons small teal-text">local_offer</i>
          <i class="material-icons small teal-text">local_parking</i>
          <i class="material-icons small teal-text">local_pharmacy</i>
          <i class="material-icons small teal-text">local_phone</i>
          <i class="material-icons small teal-text">local_pizza</i>
          <i class="material-icons small teal-text">local_play</i>
          <i class="material-icons small teal-text">local_post_office</i>
          <i class="material-icons small teal-text">local_printshop</i>
          <i class="material-icons small teal-text">local_see</i>
          <i class="material-icons small teal-text">local_shipping</i>
          <i class="material-icons small teal-text">local_taxi</i>
          <i class="material-icons small teal-text">location_city</i>
          <i class="material-icons small teal-text">location_disabled</i>
          <i class="material-icons small teal-text">location_off</i>
          <i class="material-icons small teal-text">location_on</i>
          <i class="material-icons small teal-text">location_searching</i>
          <i class="material-icons small teal-text">lock</i>
          <i class="material-icons small teal-text">lock_open</i>
          <i class="material-icons small teal-text">lock_outline</i>
          <i class="material-icons small teal-text">looks</i>
          <i class="material-icons small teal-text">looks_3</i>
          <i class="material-icons small teal-text">looks_4</i>
          <i class="material-icons small teal-text">looks_5</i>
          <i class="material-icons small teal-text">looks_6</i>
          <i class="material-icons small teal-text">looks_one</i>
          <i class="material-icons small teal-text">looks_two</i>
          <i class="material-icons small teal-text">loop</i>
          <i class="material-icons small teal-text">loupe</i>
          <i class="material-icons small teal-text">low_priority</i>
          <i class="material-icons small teal-text">loyalty</i>
          <i class="material-icons small teal-text">mail</i>
          <i class="material-icons small teal-text">mail_outline</i>
          <i class="material-icons small teal-text">map</i>
          <i class="material-icons small teal-text">markunread</i>
          <i class="material-icons small teal-text">markunread_mailbox</i>
          <i class="material-icons small teal-text">memory</i>
          <i class="material-icons small teal-text">menu</i>
          <i class="material-icons small teal-text">merge_type</i>
          <i class="material-icons small teal-text">message</i>
          <i class="material-icons small teal-text">mic</i>
          <i class="material-icons small teal-text">mic_none</i>
          <i class="material-icons small teal-text">mic_off</i>
          <i class="material-icons small teal-text">mms</i>
          <i class="material-icons small teal-text">mode_comment</i>
          <i class="material-icons small teal-text">mode_edit</i>
          <i class="material-icons small teal-text">monetization_on</i>
          <i class="material-icons small teal-text">money_off</i>
          <i class="material-icons small teal-text">monochrome_photos</i>
          <i class="material-icons small teal-text">mood</i>
          <i class="material-icons small teal-text">mood_bad</i>
          <i class="material-icons small teal-text">more</i>
          <i class="material-icons small teal-text">more_horiz</i>
          <i class="material-icons small teal-text">more_vert</i>
          <i class="material-icons small teal-text">motorcycle</i>
          <i class="material-icons small teal-text">mouse</i>
          <i class="material-icons small teal-text">move_to_inbox</i>
          <i class="material-icons small teal-text">movie</i>
          <i class="material-icons small teal-text">movie_creation</i>
          <i class="material-icons small teal-text">movie_filter</i>
          <i class="material-icons small teal-text">multiline_chart</i>
          <i class="material-icons small teal-text">music_note</i>
          <i class="material-icons small teal-text">music_video</i>
          <i class="material-icons small teal-text">my_location</i>
          <i class="material-icons small teal-text">nature</i>
          <i class="material-icons small teal-text">nature_people</i>
          <i class="material-icons small teal-text">navigate_before</i>
          <i class="material-icons small teal-text">navigate_next</i>
          <i class="material-icons small teal-text">navigation</i>
          <i class="material-icons small teal-text">near_me</i>
          <i class="material-icons small teal-text">network_cell</i>
          <i class="material-icons small teal-text">network_check</i>
          <i class="material-icons small teal-text">network_locked</i>
          <i class="material-icons small teal-text">network_wifi</i>
          <i class="material-icons small teal-text">new_releases</i>
          <i class="material-icons small teal-text">next_week</i>
          <i class="material-icons small teal-text">nfc</i>
          <i class="material-icons small teal-text">no_encryption</i>
          <i class="material-icons small teal-text">no_sim</i>
          <i class="material-icons small teal-text">not_interested</i>
          <i class="material-icons small teal-text">note</i>
          <i class="material-icons small teal-text">note_add</i>
          <i class="material-icons small teal-text">notifications</i>
          <i class="material-icons small teal-text">notifications_active</i>
          <i class="material-icons small teal-text">notifications_none</i>
          <i class="material-icons small teal-text">notifications_off</i>
          <i class="material-icons small teal-text">notifications_paused</i>
          <i class="material-icons small teal-text">offline_pin</i>
          <i class="material-icons small teal-text">ondemand_video</i>
          <i class="material-icons small teal-text">opacity</i>
          <i class="material-icons small teal-text">open_in_browser</i>
          <i class="material-icons small teal-text">open_in_new</i>
          <i class="material-icons small teal-text">open_with</i>
          <i class="material-icons small teal-text">pages</i>
          <i class="material-icons small teal-text">pageview</i>
          <i class="material-icons small teal-text">palette</i>
          <i class="material-icons small teal-text">pan_tool</i>
          <i class="material-icons small teal-text">panorama</i>
          <i class="material-icons small teal-text">panorama_fish_eye</i>
          <i class="material-icons small teal-text">panorama_horizontal</i>
          <i class="material-icons small teal-text">panorama_vertical</i>
          <i class="material-icons small teal-text">panorama_wide_angle</i>
          <i class="material-icons small teal-text">party_mode</i>
          <i class="material-icons small teal-text">pause</i>
          <i class="material-icons small teal-text">pause_circle_filled</i>
          <i class="material-icons small teal-text">pause_circle_outline</i>
          <i class="material-icons small teal-text">payment</i>
          <i class="material-icons small teal-text">people</i>
          <i class="material-icons small teal-text">people_outline</i>
          <i class="material-icons small teal-text">perm_camera_mic</i>
          <i class="material-icons small teal-text">perm_contact_calendar</i>
          <i class="material-icons small teal-text">perm_data_setting</i>
          <i class="material-icons small teal-text">perm_device_information</i>
          <i class="material-icons small teal-text">perm_identity</i>
          <i class="material-icons small teal-text">perm_media</i>
          <i class="material-icons small teal-text">perm_phone_msg</i>
          <i class="material-icons small teal-text">perm_scan_wifi</i>
          <i class="material-icons small teal-text">person</i>
          <i class="material-icons small teal-text">person_add</i>
          <i class="material-icons small teal-text">person_outline</i>
          <i class="material-icons small teal-text">person_pin</i>
          <i class="material-icons small teal-text">person_pin_circle</i>
          <i class="material-icons small teal-text">personal_video</i>
          <i class="material-icons small teal-text">pets</i>
          <i class="material-icons small teal-text">phone</i>
          <i class="material-icons small teal-text">phone_android</i>
          <i class="material-icons small teal-text">phone_bluetooth_speaker</i>
          <i class="material-icons small teal-text">phone_forwarded</i>
          <i class="material-icons small teal-text">phone_in_talk</i>
          <i class="material-icons small teal-text">phone_iphone</i>
          <i class="material-icons small teal-text">phone_locked</i>
          <i class="material-icons small teal-text">phone_missed</i>
          <i class="material-icons small teal-text">phone_paused</i>
          <i class="material-icons small teal-text">phonelink</i>
          <i class="material-icons small teal-text">phonelink_erase</i>
          <i class="material-icons small teal-text">phonelink_lock</i>
          <i class="material-icons small teal-text">phonelink_off</i>
          <i class="material-icons small teal-text">phonelink_ring</i>
          <i class="material-icons small teal-text">phonelink_setup</i>
          <i class="material-icons small teal-text">photo</i>
          <i class="material-icons small teal-text">photo_album</i>
          <i class="material-icons small teal-text">photo_camera</i>
          <i class="material-icons small teal-text">photo_filter</i>
          <i class="material-icons small teal-text">photo_library</i>
          <i class="material-icons small teal-text">photo_size_select_actual</i>
          <i class="material-icons small teal-text">photo_size_select_large</i>
          <i class="material-icons small teal-text">photo_size_select_small</i>
          <i class="material-icons small teal-text">picture_as_pdf</i>
          <i class="material-icons small teal-text">picture_in_picture</i>
          <i class="material-icons small teal-text">picture_in_picture_alt</i>
          <i class="material-icons small teal-text">pie_chart</i>
          <i class="material-icons small teal-text">pie_chart_outlined</i>
          <i class="material-icons small teal-text">pin_drop</i>
          <i class="material-icons small teal-text">place</i>
          <i class="material-icons small teal-text">play_arrow</i>
          <i class="material-icons small teal-text">play_circle_filled</i>
          <i class="material-icons small teal-text">play_circle_outline</i>
          <i class="material-icons small teal-text">play_for_work</i>
          <i class="material-icons small teal-text">playlist_add</i>
          <i class="material-icons small teal-text">playlist_add_check</i>
          <i class="material-icons small teal-text">playlist_play</i>
          <i class="material-icons small teal-text">plus_one</i>
          <i class="material-icons small teal-text">poll</i>
          <i class="material-icons small teal-text">polymer</i>
          <i class="material-icons small teal-text">pool</i>
          <i class="material-icons small teal-text">portable_wifi_off</i>
          <i class="material-icons small teal-text">portrait</i>
          <i class="material-icons small teal-text">power</i>
          <i class="material-icons small teal-text">power_input</i>
          <i class="material-icons small teal-text">power_settings_new</i>
          <i class="material-icons small teal-text">pregnant_woman</i>
          <i class="material-icons small teal-text">present_to_all</i>
          <i class="material-icons small teal-text">print</i>
          <i class="material-icons small teal-text">priority_high</i>
          <i class="material-icons small teal-text">public</i>
          <i class="material-icons small teal-text">publish</i>
          <i class="material-icons small teal-text">query_builder</i>
          <i class="material-icons small teal-text">question_answer</i>
          <i class="material-icons small teal-text">queue</i>
          <i class="material-icons small teal-text">queue_music</i>
          <i class="material-icons small teal-text">queue_play_next</i>
          <i class="material-icons small teal-text">radio</i>
          <i class="material-icons small teal-text">radio_button_checked</i>
          <i class="material-icons small teal-text">radio_button_unchecked</i>
          <i class="material-icons small teal-text">rate_review</i>
          <i class="material-icons small teal-text">receipt</i>
          <i class="material-icons small teal-text">recent_actors</i>
          <i class="material-icons small teal-text">record_voice_over</i>
          <i class="material-icons small teal-text">redeem</i>
          <i class="material-icons small teal-text">redo</i>
          <i class="material-icons small teal-text">refresh</i>
          <i class="material-icons small teal-text">remove</i>
          <i class="material-icons small teal-text">remove_circle</i>
          <i class="material-icons small teal-text">remove_circle_outline</i>
          <i class="material-icons small teal-text">remove_from_queue</i>
          <i class="material-icons small teal-text">remove_red_eye</i>
          <i class="material-icons small teal-text">remove_shopping_cart</i>
          <i class="material-icons small teal-text">reorder</i>
          <i class="material-icons small teal-text">repeat</i>
          <i class="material-icons small teal-text">repeat_one</i>
          <i class="material-icons small teal-text">replay</i>
          <i class="material-icons small teal-text">replay_10</i>
          <i class="material-icons small teal-text">replay_30</i>
          <i class="material-icons small teal-text">replay_5</i>
          <i class="material-icons small teal-text">reply</i>
          <i class="material-icons small teal-text">reply_all</i>
          <i class="material-icons small teal-text">report</i>
          <i class="material-icons small teal-text">report_problem</i>
          <i class="material-icons small teal-text">restaurant</i>
          <i class="material-icons small teal-text">restaurant_menu</i>
          <i class="material-icons small teal-text">restore</i>
          <i class="material-icons small teal-text">restore_page</i>
          <i class="material-icons small teal-text">ring_volume</i>
          <i class="material-icons small teal-text">room</i>
          <i class="material-icons small teal-text">room_service</i>
          <i class="material-icons small teal-text">rotate_90_degrees_ccw</i>
          <i class="material-icons small teal-text">rotate_left</i>
          <i class="material-icons small teal-text">rotate_right</i>
          <i class="material-icons small teal-text">rounded_corner</i>
          <i class="material-icons small teal-text">router</i>
          <i class="material-icons small teal-text">rowing</i>
          <i class="material-icons small teal-text">rss_feed</i>
          <i class="material-icons small teal-text">rv_hookup</i>
          <i class="material-icons small teal-text">satellite</i>
          <i class="material-icons small teal-text">save</i>
          <i class="material-icons small teal-text">scanner</i>
          <i class="material-icons small teal-text">schedule</i>
          <i class="material-icons small teal-text">school</i>
          <i class="material-icons small teal-text">screen_lock_landscape</i>
          <i class="material-icons small teal-text">screen_lock_portrait</i>
          <i class="material-icons small teal-text">screen_lock_rotation</i>
          <i class="material-icons small teal-text">screen_rotation</i>
          <i class="material-icons small teal-text">screen_share</i>
          <i class="material-icons small teal-text">sd_card</i>
          <i class="material-icons small teal-text">sd_storage</i>
          <i class="material-icons small teal-text">search</i>
          <i class="material-icons small teal-text">security</i>
          <i class="material-icons small teal-text">select_all</i>
          <i class="material-icons small teal-text">send</i>
          <i class="material-icons small teal-text">sentiment_dissatisfied</i>
          <i class="material-icons small teal-text">sentiment_neutral</i>
          <i class="material-icons small teal-text">sentiment_satisfied</i>
          <i class="material-icons small teal-text">sentiment_very_dissatisfied</i>
          <i class="material-icons small teal-text">sentiment_very_satisfied</i>
          <i class="material-icons small teal-text">settings</i>
          <i class="material-icons small teal-text">settings_applications</i>
          <i class="material-icons small teal-text">settings_backup_restore</i>
          <i class="material-icons small teal-text">settings_bluetooth</i>
          <i class="material-icons small teal-text">settings_brightness</i>
          <i class="material-icons small teal-text">settings_cell</i>
          <i class="material-icons small teal-text">settings_ethernet</i>
          <i class="material-icons small teal-text">settings_input_antenna</i>
          <i class="material-icons small teal-text">settings_input_component</i>
          <i class="material-icons small teal-text">settings_input_composite</i>
          <i class="material-icons small teal-text">settings_input_hdmi</i>
          <i class="material-icons small teal-text">settings_input_svideo</i>
          <i class="material-icons small teal-text">settings_overscan</i>
          <i class="material-icons small teal-text">settings_phone</i>
          <i class="material-icons small teal-text">settings_power</i>
          <i class="material-icons small teal-text">settings_remote</i>
          <i class="material-icons small teal-text">settings_system_daydream</i>
          <i class="material-icons small teal-text">settings_voice</i>
          <i class="material-icons small teal-text">share</i>
          <i class="material-icons small teal-text">shop</i>
          <i class="material-icons small teal-text">shop_two</i>
          <i class="material-icons small teal-text">shopping_basket</i>
          <i class="material-icons small teal-text">shopping_cart</i>
          <i class="material-icons small teal-text">short_text</i>
          <i class="material-icons small teal-text">show_chart</i>
          <i class="material-icons small teal-text">shuffle</i>
          <i class="material-icons small teal-text">signal_cellular_4_bar</i>
          <i class="material-icons small teal-text">signal_cellular_connected_no_internet_4_bar</i>
          <i class="material-icons small teal-text">signal_cellular_no_sim</i>
          <i class="material-icons small teal-text">signal_cellular_null</i>
          <i class="material-icons small teal-text">signal_cellular_off</i>
          <i class="material-icons small teal-text">signal_wifi_4_bar</i>
          <i class="material-icons small teal-text">signal_wifi_4_bar_lock</i>
          <i class="material-icons small teal-text">signal_wifi_off</i>
          <i class="material-icons small teal-text">sim_card</i>
          <i class="material-icons small teal-text">sim_card_alert</i>
          <i class="material-icons small teal-text">skip_next</i>
          <i class="material-icons small teal-text">skip_previous</i>
          <i class="material-icons small teal-text">slideshow</i>
          <i class="material-icons small teal-text">slow_motion_video</i>
          <i class="material-icons small teal-text">smartphone</i>
          <i class="material-icons small teal-text">smoke_free</i>
          <i class="material-icons small teal-text">smoking_rooms</i>
          <i class="material-icons small teal-text">sms</i>
          <i class="material-icons small teal-text">sms_failed</i>
          <i class="material-icons small teal-text">snooze</i>
          <i class="material-icons small teal-text">sort</i>
          <i class="material-icons small teal-text">sort_by_alpha</i>
          <i class="material-icons small teal-text">spa</i>
          <i class="material-icons small teal-text">space_bar</i>
          <i class="material-icons small teal-text">speaker</i>
          <i class="material-icons small teal-text">speaker_group</i>
          <i class="material-icons small teal-text">speaker_notes</i>
          <i class="material-icons small teal-text">speaker_notes_off</i>
          <i class="material-icons small teal-text">speaker_phone</i>
          <i class="material-icons small teal-text">spellcheck</i>
          <i class="material-icons small teal-text">star</i>
          <i class="material-icons small teal-text">star_border</i>
          <i class="material-icons small teal-text">star_half</i>
          <i class="material-icons small teal-text">stars</i>
          <i class="material-icons small teal-text">stay_current_landscape</i>
          <i class="material-icons small teal-text">stay_current_portrait</i>
          <i class="material-icons small teal-text">stay_primary_landscape</i>
          <i class="material-icons small teal-text">stay_primary_portrait</i>
          <i class="material-icons small teal-text">stop</i>
          <i class="material-icons small teal-text">stop_screen_share</i>
          <i class="material-icons small teal-text">storage</i>
          <i class="material-icons small teal-text">store</i>
          <i class="material-icons small teal-text">store_mall_directory</i>
          <i class="material-icons small teal-text">straighten</i>
          <i class="material-icons small teal-text">streetview</i>
          <i class="material-icons small teal-text">strikethrough_s</i>
          <i class="material-icons small teal-text">style</i>
          <i class="material-icons small teal-text">subdirectory_arrow_left</i>
          <i class="material-icons small teal-text">subdirectory_arrow_right</i>
          <i class="material-icons small teal-text">subject</i>
          <i class="material-icons small teal-text">subscriptions</i>
          <i class="material-icons small teal-text">subtitles</i>
          <i class="material-icons small teal-text">subway</i>
          <i class="material-icons small teal-text">supervisor_account</i>
          <i class="material-icons small teal-text">surround_sound</i>
          <i class="material-icons small teal-text">swap_calls</i>
          <i class="material-icons small teal-text">swap_horiz</i>
          <i class="material-icons small teal-text">swap_vert</i>
          <i class="material-icons small teal-text">swap_vertical_circle</i>
          <i class="material-icons small teal-text">switch_camera</i>
          <i class="material-icons small teal-text">switch_video</i>
          <i class="material-icons small teal-text">sync</i>
          <i class="material-icons small teal-text">sync_disabled</i>
          <i class="material-icons small teal-text">sync_problem</i>
          <i class="material-icons small teal-text">system_update</i>
          <i class="material-icons small teal-text">system_update_alt</i>
          <i class="material-icons small teal-text">tab</i>
          <i class="material-icons small teal-text">tab_unselected</i>
          <i class="material-icons small teal-text">tablet</i>
          <i class="material-icons small teal-text">tablet_android</i>
          <i class="material-icons small teal-text">tablet_mac</i>
          <i class="material-icons small teal-text">tag_faces</i>
          <i class="material-icons small teal-text">tap_and_play</i>
          <i class="material-icons small teal-text">terrain</i>
          <i class="material-icons small teal-text">text_fields</i>
          <i class="material-icons small teal-text">text_format</i>
          <i class="material-icons small teal-text">textsms</i>
          <i class="material-icons small teal-text">texture</i>
          <i class="material-icons small teal-text">theaters</i>
          <i class="material-icons small teal-text">thumb_down</i>
          <i class="material-icons small teal-text">thumb_up</i>
          <i class="material-icons small teal-text">thumbs_up_down</i>
          <i class="material-icons small teal-text">time_to_leave</i>
          <i class="material-icons small teal-text">timelapse</i>
          <i class="material-icons small teal-text">timeline</i>
          <i class="material-icons small teal-text">timer</i>
          <i class="material-icons small teal-text">timer_10</i>
          <i class="material-icons small teal-text">timer_3</i>
          <i class="material-icons small teal-text">timer_off</i>
          <i class="material-icons small teal-text">title</i>
          <i class="material-icons small teal-text">toc</i>
          <i class="material-icons small teal-text">today</i>
          <i class="material-icons small teal-text">toll</i>
          <i class="material-icons small teal-text">tonality</i>
          <i class="material-icons small teal-text">touch_app</i>
          <i class="material-icons small teal-text">toys</i>
          <i class="material-icons small teal-text">track_changes</i>
          <i class="material-icons small teal-text">traffic</i>
          <i class="material-icons small teal-text">train</i>
          <i class="material-icons small teal-text">tram</i>
          <i class="material-icons small teal-text">transfer_within_a_station</i>
          <i class="material-icons small teal-text">transform</i>
          <i class="material-icons small teal-text">translate</i>
          <i class="material-icons small teal-text">trending_down</i>
          <i class="material-icons small teal-text">trending_flat</i>
          <i class="material-icons small teal-text">trending_up</i>
          <i class="material-icons small teal-text">tune</i>
          <i class="material-icons small teal-text">turned_in</i>
          <i class="material-icons small teal-text">turned_in_not</i>
          <i class="material-icons small teal-text">tv</i>
          <i class="material-icons small teal-text">unarchive</i>
          <i class="material-icons small teal-text">undo</i>
          <i class="material-icons small teal-text">unfold_less</i>
          <i class="material-icons small teal-text">unfold_more</i>
          <i class="material-icons small teal-text">update</i>
          <i class="material-icons small teal-text">usb</i>
          <i class="material-icons small teal-text">verified_user</i>
          <i class="material-icons small teal-text">vertical_align_bottom</i>
          <i class="material-icons small teal-text">vertical_align_center</i>
          <i class="material-icons small teal-text">vertical_align_top</i>
          <i class="material-icons small teal-text">vibration</i>
          <i class="material-icons small teal-text">video_call</i>
          <i class="material-icons small teal-text">video_label</i>
          <i class="material-icons small teal-text">video_library</i>
          <i class="material-icons small teal-text">videocam</i>
          <i class="material-icons small teal-text">videocam_off</i>
          <i class="material-icons small teal-text">videogame_asset</i>
          <i class="material-icons small teal-text">view_agenda</i>
          <i class="material-icons small teal-text">view_array</i>
          <i class="material-icons small teal-text">view_carousel</i>
          <i class="material-icons small teal-text">view_column</i>
          <i class="material-icons small teal-text">view_comfy</i>
          <i class="material-icons small teal-text">view_compact</i>
          <i class="material-icons small teal-text">view_day</i>
          <i class="material-icons small teal-text">view_headline</i>
          <i class="material-icons small teal-text">view_list</i>
          <i class="material-icons small teal-text">view_module</i>
          <i class="material-icons small teal-text">view_quilt</i>
          <i class="material-icons small teal-text">view_stream</i>
          <i class="material-icons small teal-text">view_week</i>
          <i class="material-icons small teal-text">vignette</i>
          <i class="material-icons small teal-text">visibility</i>
          <i class="material-icons small teal-text">visibility_off</i>
          <i class="material-icons small teal-text">voice_chat</i>
          <i class="material-icons small teal-text">voicemail</i>
          <i class="material-icons small teal-text">volume_down</i>
          <i class="material-icons small teal-text">volume_mute</i>
          <i class="material-icons small teal-text">volume_off</i>
          <i class="material-icons small teal-text">volume_up</i>
          <i class="material-icons small teal-text">vpn_key</i>
          <i class="material-icons small teal-text">vpn_lock</i>
          <i class="material-icons small teal-text">wallpaper</i>
          <i class="material-icons small teal-text">warning</i>
          <i class="material-icons small teal-text">watch</i>
          <i class="material-icons small teal-text">watch_later</i>
          <i class="material-icons small teal-text">wb_auto</i>
          <i class="material-icons small teal-text">wb_cloudy</i>
          <i class="material-icons small teal-text">wb_incandescent</i>
          <i class="material-icons small teal-text">wb_iridescent</i>
          <i class="material-icons small teal-text">wb_sunny</i>
          <i class="material-icons small teal-text">wc</i>
          <i class="material-icons small teal-text">web</i>
          <i class="material-icons small teal-text">web_asset</i>
          <i class="material-icons small teal-text">weekend</i>
          <i class="material-icons small teal-text">whatshot</i>
          <i class="material-icons small teal-text">widgets</i>
          <i class="material-icons small teal-text">wifi</i>
          <i class="material-icons small teal-text">wifi_lock</i>
          <i class="material-icons small teal-text">wifi_tethering</i>
          <i class="material-icons small teal-text">work</i>
          <i class="material-icons small teal-text">wrap_text</i>
          <i class="material-icons small teal-text">youtube_searched_for</i>
          <i class="material-icons small teal-text">zoom_in</i>
          <i class="material-icons small teal-text">zoom_out</i>
          <i class="material-icons small teal-text">zoom_out_map</i>
        </div>
      </div>
    </p>
  </div>
  <div class="modal-footer">
    <?php if($edit){ ?>
      <button type="submit" class="modal-close waves-effect waves-light lighten-1 btn">Modificar</button>
    <?php }else{ ?>
      <button type="submit" class="modal-close waves-effect waves-light lighten-1 btn">Agregar</button>
    <?php } ?>
    <?php if($edit){ ?>
      <a href="<?php echo RUTA_URL?>/admin/categorias" class="modal-close waves-effect waves-light grey lighten-1 btn">Cancelar</a>
    <?php }else{ ?>
      <a href="" class="modal-close waves-effect waves-light grey lighten-1 btn">Cancelar</a>
    <?php } ?>
    </form>
  </div>
</div>

<script>
  $(document).ready(function(){

    var redireccionar = function(){ 
      window.location = '<?php echo RUTA_URL?>/admin/categorias';
    };

    var url = window.location.href;
    if (url.indexOf('editCategory') > 0){
      $('#modalCategoria').modal({ 'preventScrolling': true, 'onCloseEnd': redireccionar });
      $('#modalCategoria').modal('open');
    }else{
      $('.modal').modal();

    }
    $('.botonesBorrar').click(function(){
      var id = this.name;
      $('#buttonDelete').prop({
        href: '<?php echo RUTA_URL?>/admin/deleteCategory/'+id
      });
    });

		$("i").mouseenter(function(){
			$(this).addClass("grey-text");
			$(this).removeClass("teal-text");
		});
		$("i").mouseleave(function(){
			$(this).removeClass("grey-text");
			$(this).addClass("teal-text");
		});
		$("i").click(function(){
			$("i").each(function(i){
		    $(this).removeClass("black-text");
		    $(this).addClass("teal-text");    
		  });
		  $(this).removeClass("grey-text");
		  $(this).removeClass("teal-text");
			$(this).addClass("black-text");
			var icono = $(this).attr('class');
			var icono_anterior = $("#span_icono").attr('class');
			$("#span_icono").removeClass(icono_anterior);
			$("#span_icono").addClass(icono);
			$("#span_icono").removeClass("black-text");
			$("#text_icono_seleccionado").val($("#span_icono").attr("class"));
			if (icono=="black-text"){
				$("#span_icono").addClass("flaticon-add");
				$("#text_icono_seleccionado").val(null);
			}
		});
  });
</script>