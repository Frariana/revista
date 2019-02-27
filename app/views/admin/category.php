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

<div id="modalCategoria" class="modal modal-fixed-footer">
  <div class="modal-content">
    <?php if($edit){ ?>
      <form action="<?php echo RUTA_URL.'/admin/editCategory/'.$data['dataEditCategoria']['id_categoria']; ?>" method="post">
    <?php }else{ ?>
      <form action="<?php echo RUTA_URL?>/admin/insertCategory" method="post">
    <?php } ?>
    <div class="row">
      <div class="col s12 input-field" >
        <?php if($edit){ ?>
          <input value="<?php echo $data['dataEditCategoria']['category_titulo']; ?>" name="titulo" id="titulo" type="text" required autofocus>
        <?php }else{ ?>
          <input name="titulo" id="titulo" type="text" required autofocus>
        <?php } ?>
        <label for="titulo">Título de categoría</label>
      </div>
      <?php if($edit){ ?>
        <input value="<?php echo $data['dataEditCategoria']['icono']; ?>" name="icono" id="icono" type="hidden">
      <?php }else{ ?>
        <input name="icono" id="icono" type="hidden">
      <?php } ?>

      <div class="col s12" id="grilla_de_iconos">
        <i class="material-icons small teal-text grilla">3d_rotation</i>
        <i class="material-icons small teal-text grilla">ac_unit</i>
        <i class="material-icons small teal-text grilla">access_alarm</i>
        <i class="material-icons small teal-text grilla">access_alarms</i>
        <i class="material-icons small teal-text grilla">access_time</i>
        <i class="material-icons small teal-text grilla">accessibility</i>
        <i class="material-icons small teal-text grilla">accessible</i>
        <i class="material-icons small teal-text grilla">account_balance</i>
        <i class="material-icons small teal-text grilla">account_balance_wallet</i>
        <i class="material-icons small teal-text grilla">account_box</i>
        <i class="material-icons small teal-text grilla">account_circle</i>
        <i class="material-icons small teal-text grilla">adb</i>
        <i class="material-icons small teal-text grilla">add</i>
        <i class="material-icons small teal-text grilla">add_a_photo</i>
        <i class="material-icons small teal-text grilla">add_alarm</i>
        <i class="material-icons small teal-text grilla">add_alert</i>
        <i class="material-icons small teal-text grilla">add_box</i>
        <i class="material-icons small teal-text grilla">add_circle</i>
        <i class="material-icons small teal-text grilla">add_circle_outline</i>
        <i class="material-icons small teal-text grilla">add_location</i>
        <i class="material-icons small teal-text grilla">add_shopping_cart</i>
        <i class="material-icons small teal-text grilla">add_to_photos</i>
        <i class="material-icons small teal-text grilla">add_to_queue</i>
        <i class="material-icons small teal-text grilla">adjust</i>
        <i class="material-icons small teal-text grilla">airline_seat_flat</i>
        <i class="material-icons small teal-text grilla">airline_seat_flat_angled</i>
        <i class="material-icons small teal-text grilla">airline_seat_individual_suite</i>
        <i class="material-icons small teal-text grilla">airline_seat_legroom_extra</i>
        <i class="material-icons small teal-text grilla">airline_seat_legroom_normal</i>
        <i class="material-icons small teal-text grilla">airline_seat_legroom_reduced</i>
        <i class="material-icons small teal-text grilla">airline_seat_recline_extra</i>
        <i class="material-icons small teal-text grilla">airline_seat_recline_normal</i>
        <i class="material-icons small teal-text grilla">airplanemode_active</i>
        <i class="material-icons small teal-text grilla">airplanemode_inactive</i>
        <i class="material-icons small teal-text grilla">airplay</i>
        <i class="material-icons small teal-text grilla">airport_shuttle</i>
        <i class="material-icons small teal-text grilla">alarm</i>
        <i class="material-icons small teal-text grilla">alarm_add</i>
        <i class="material-icons small teal-text grilla">alarm_off</i>
        <i class="material-icons small teal-text grilla">alarm_on</i>
        <i class="material-icons small teal-text grilla">album</i>
        <i class="material-icons small teal-text grilla">all_inclusive</i>
        <i class="material-icons small teal-text grilla">all_out</i>
        <i class="material-icons small teal-text grilla">android</i>
        <i class="material-icons small teal-text grilla">announcement</i>
        <i class="material-icons small teal-text grilla">apps</i>
        <i class="material-icons small teal-text grilla">archive</i>
        <i class="material-icons small teal-text grilla">arrow_back</i>
        <i class="material-icons small teal-text grilla">arrow_downward</i>
        <i class="material-icons small teal-text grilla">arrow_drop_down</i>
        <i class="material-icons small teal-text grilla">arrow_drop_down_circle</i>
        <i class="material-icons small teal-text grilla">arrow_drop_up</i>
        <i class="material-icons small teal-text grilla">arrow_forward</i>
        <i class="material-icons small teal-text grilla">arrow_upward</i>
        <i class="material-icons small teal-text grilla">art_track</i>
        <i class="material-icons small teal-text grilla">aspect_ratio</i>
        <i class="material-icons small teal-text grilla">assessment</i>
        <i class="material-icons small teal-text grilla">assignment</i>
        <i class="material-icons small teal-text grilla">assignment_ind</i>
        <i class="material-icons small teal-text grilla">assignment_late</i>
        <i class="material-icons small teal-text grilla">assignment_return</i>
        <i class="material-icons small teal-text grilla">assignment_returned</i>
        <i class="material-icons small teal-text grilla">assignment_turned_in</i>
        <i class="material-icons small teal-text grilla">assistant</i>
        <i class="material-icons small teal-text grilla">assistant_photo</i>
        <i class="material-icons small teal-text grilla">attach_file</i>
        <i class="material-icons small teal-text grilla">attach_money</i>
        <i class="material-icons small teal-text grilla">attachment</i>
        <i class="material-icons small teal-text grilla">audiotrack</i>
        <i class="material-icons small teal-text grilla">autorenew</i>
        <i class="material-icons small teal-text grilla">av_timer</i>
        <i class="material-icons small teal-text grilla">backspace</i>
        <i class="material-icons small teal-text grilla">backup</i>
        <i class="material-icons small teal-text grilla">battery_alert</i>
        <i class="material-icons small teal-text grilla">battery_charging_full</i>
        <i class="material-icons small teal-text grilla">battery_full</i>
        <i class="material-icons small teal-text grilla">battery_std</i>
        <i class="material-icons small teal-text grilla">battery_unknown</i>
        <i class="material-icons small teal-text grilla">beach_access</i>
        <i class="material-icons small teal-text grilla">beenhere</i>
        <i class="material-icons small teal-text grilla">block</i>
        <i class="material-icons small teal-text grilla">bluetooth</i>
        <i class="material-icons small teal-text grilla">bluetooth_audio</i>
        <i class="material-icons small teal-text grilla">bluetooth_connected</i>
        <i class="material-icons small teal-text grilla">bluetooth_disabled</i>
        <i class="material-icons small teal-text grilla">bluetooth_searching</i>
        <i class="material-icons small teal-text grilla">blur_circular</i>
        <i class="material-icons small teal-text grilla">blur_linear</i>
        <i class="material-icons small teal-text grilla">blur_off</i>
        <i class="material-icons small teal-text grilla">blur_on</i>
        <i class="material-icons small teal-text grilla">book</i>
        <i class="material-icons small teal-text grilla">bookmark</i>
        <i class="material-icons small teal-text grilla">bookmark_border</i>
        <i class="material-icons small teal-text grilla">border_all</i>
        <i class="material-icons small teal-text grilla">border_bottom</i>
        <i class="material-icons small teal-text grilla">border_clear</i>
        <i class="material-icons small teal-text grilla">border_color</i>
        <i class="material-icons small teal-text grilla">border_horizontal</i>
        <i class="material-icons small teal-text grilla">border_inner</i>
        <i class="material-icons small teal-text grilla">border_left</i>
        <i class="material-icons small teal-text grilla">border_outer</i>
        <i class="material-icons small teal-text grilla">border_right</i>
        <i class="material-icons small teal-text grilla">border_style</i>
        <i class="material-icons small teal-text grilla">border_top</i>
        <i class="material-icons small teal-text grilla">border_vertical</i>
        <i class="material-icons small teal-text grilla">branding_watermark</i>
        <i class="material-icons small teal-text grilla">brightness_1</i>
        <i class="material-icons small teal-text grilla">brightness_2</i>
        <i class="material-icons small teal-text grilla">brightness_3</i>
        <i class="material-icons small teal-text grilla">brightness_4</i>
        <i class="material-icons small teal-text grilla">brightness_5</i>
        <i class="material-icons small teal-text grilla">brightness_6</i>
        <i class="material-icons small teal-text grilla">brightness_7</i>
        <i class="material-icons small teal-text grilla">brightness_auto</i>
        <i class="material-icons small teal-text grilla">brightness_high</i>
        <i class="material-icons small teal-text grilla">brightness_low</i>
        <i class="material-icons small teal-text grilla">brightness_medium</i>
        <i class="material-icons small teal-text grilla">broken_image</i>
        <i class="material-icons small teal-text grilla">brush</i>
        <i class="material-icons small teal-text grilla">bubble_chart</i>
        <i class="material-icons small teal-text grilla">bug_report</i>
        <i class="material-icons small teal-text grilla">build</i>
        <i class="material-icons small teal-text grilla">burst_mode</i>
        <i class="material-icons small teal-text grilla">business</i>
        <i class="material-icons small teal-text grilla">business_center</i>
        <i class="material-icons small teal-text grilla">cached</i>
        <i class="material-icons small teal-text grilla">cake</i>
        <i class="material-icons small teal-text grilla">call</i>
        <i class="material-icons small teal-text grilla">call_end</i>
        <i class="material-icons small teal-text grilla">call_made</i>
        <i class="material-icons small teal-text grilla">call_merge</i>
        <i class="material-icons small teal-text grilla">call_missed</i>
        <i class="material-icons small teal-text grilla">call_missed_outgoing</i>
        <i class="material-icons small teal-text grilla">call_received</i>
        <i class="material-icons small teal-text grilla">call_split</i>
        <i class="material-icons small teal-text grilla">call_to_action</i>
        <i class="material-icons small teal-text grilla">camera</i>
        <i class="material-icons small teal-text grilla">camera_alt</i>
        <i class="material-icons small teal-text grilla">camera_enhance</i>
        <i class="material-icons small teal-text grilla">camera_front</i>
        <i class="material-icons small teal-text grilla">camera_rear</i>
        <i class="material-icons small teal-text grilla">camera_roll</i>
        <i class="material-icons small teal-text grilla">cancel</i>
        <i class="material-icons small teal-text grilla">card_giftcard</i>
        <i class="material-icons small teal-text grilla">card_membership</i>
        <i class="material-icons small teal-text grilla">card_travel</i>
        <i class="material-icons small teal-text grilla">casino</i>
        <i class="material-icons small teal-text grilla">cast</i>
        <i class="material-icons small teal-text grilla">cast_connected</i>
        <i class="material-icons small teal-text grilla">center_focus_strong</i>
        <i class="material-icons small teal-text grilla">center_focus_weak</i>
        <i class="material-icons small teal-text grilla">change_history</i>
        <i class="material-icons small teal-text grilla">chat</i>
        <i class="material-icons small teal-text grilla">chat_bubble</i>
        <i class="material-icons small teal-text grilla">chat_bubble_outline</i>
        <i class="material-icons small teal-text grilla">check</i>
        <i class="material-icons small teal-text grilla">check_box</i>
        <i class="material-icons small teal-text grilla">check_box_outline_blank</i>
        <i class="material-icons small teal-text grilla">check_circle</i>
        <i class="material-icons small teal-text grilla">chevron_left</i>
        <i class="material-icons small teal-text grilla">chevron_right</i>
        <i class="material-icons small teal-text grilla">child_care</i>
        <i class="material-icons small teal-text grilla">child_friendly</i>
        <i class="material-icons small teal-text grilla">chrome_reader_mode</i>
        <i class="material-icons small teal-text grilla">class</i>
        <i class="material-icons small teal-text grilla">clear</i>
        <i class="material-icons small teal-text grilla">clear_all</i>
        <i class="material-icons small teal-text grilla">close</i>
        <i class="material-icons small teal-text grilla">closed_caption</i>
        <i class="material-icons small teal-text grilla">cloud</i>
        <i class="material-icons small teal-text grilla">cloud_circle</i>
        <i class="material-icons small teal-text grilla">cloud_done</i>
        <i class="material-icons small teal-text grilla">cloud_download</i>
        <i class="material-icons small teal-text grilla">cloud_off</i>
        <i class="material-icons small teal-text grilla">cloud_queue</i>
        <i class="material-icons small teal-text grilla">cloud_upload</i>
        <i class="material-icons small teal-text grilla">code</i>
        <i class="material-icons small teal-text grilla">collections</i>
        <i class="material-icons small teal-text grilla">collections_bookmark</i>
        <i class="material-icons small teal-text grilla">color_lens</i>
        <i class="material-icons small teal-text grilla">colorize</i>
        <i class="material-icons small teal-text grilla">comment</i>
        <i class="material-icons small teal-text grilla">compare</i>
        <i class="material-icons small teal-text grilla">compare_arrows</i>
        <i class="material-icons small teal-text grilla">computer</i>
        <i class="material-icons small teal-text grilla">confirmation_number</i>
        <i class="material-icons small teal-text grilla">contact_mail</i>
        <i class="material-icons small teal-text grilla">contact_phone</i>
        <i class="material-icons small teal-text grilla">contacts</i>
        <i class="material-icons small teal-text grilla">content_copy</i>
        <i class="material-icons small teal-text grilla">content_cut</i>
        <i class="material-icons small teal-text grilla">content_paste</i>
        <i class="material-icons small teal-text grilla">control_point</i>
        <i class="material-icons small teal-text grilla">control_point_duplicate</i>
        <i class="material-icons small teal-text grilla">copyright</i>
        <i class="material-icons small teal-text grilla">create</i>
        <i class="material-icons small teal-text grilla">create_new_folder</i>
        <i class="material-icons small teal-text grilla">credit_card</i>
        <i class="material-icons small teal-text grilla">crop</i>
        <i class="material-icons small teal-text grilla">crop_16_9</i>
        <i class="material-icons small teal-text grilla">crop_3_2</i>
        <i class="material-icons small teal-text grilla">crop_5_4</i>
        <i class="material-icons small teal-text grilla">crop_7_5</i>
        <i class="material-icons small teal-text grilla">crop_din</i>
        <i class="material-icons small teal-text grilla">crop_free</i>
        <i class="material-icons small teal-text grilla">crop_landscape</i>
        <i class="material-icons small teal-text grilla">crop_original</i>
        <i class="material-icons small teal-text grilla">crop_portrait</i>
        <i class="material-icons small teal-text grilla">crop_rotate</i>
        <i class="material-icons small teal-text grilla">crop_square</i>
        <i class="material-icons small teal-text grilla">dashboard</i>
        <i class="material-icons small teal-text grilla">data_usage</i>
        <i class="material-icons small teal-text grilla">date_range</i>
        <i class="material-icons small teal-text grilla">dehaze</i>
        <i class="material-icons small teal-text grilla">delete</i>
        <i class="material-icons small teal-text grilla">delete_forever</i>
        <i class="material-icons small teal-text grilla">delete_sweep</i>
        <i class="material-icons small teal-text grilla">description</i>
        <i class="material-icons small teal-text grilla">desktop_mac</i>
        <i class="material-icons small teal-text grilla">desktop_windows</i>
        <i class="material-icons small teal-text grilla">details</i>
        <i class="material-icons small teal-text grilla">developer_board</i>
        <i class="material-icons small teal-text grilla">developer_mode</i>
        <i class="material-icons small teal-text grilla">device_hub</i>
        <i class="material-icons small teal-text grilla">devices</i>
        <i class="material-icons small teal-text grilla">devices_other</i>
        <i class="material-icons small teal-text grilla">dialer_sip</i>
        <i class="material-icons small teal-text grilla">dialpad</i>
        <i class="material-icons small teal-text grilla">directions</i>
        <i class="material-icons small teal-text grilla">directions_bike</i>
        <i class="material-icons small teal-text grilla">directions_boat</i>
        <i class="material-icons small teal-text grilla">directions_bus</i>
        <i class="material-icons small teal-text grilla">directions_car</i>
        <i class="material-icons small teal-text grilla">directions_railway</i>
        <i class="material-icons small teal-text grilla">directions_run</i>
        <i class="material-icons small teal-text grilla">directions_subway</i>
        <i class="material-icons small teal-text grilla">directions_transit</i>
        <i class="material-icons small teal-text grilla">directions_walk</i>
        <i class="material-icons small teal-text grilla">disc_full</i>
        <i class="material-icons small teal-text grilla">dns</i>
        <i class="material-icons small teal-text grilla">do_not_disturb</i>
        <i class="material-icons small teal-text grilla">do_not_disturb_alt</i>
        <i class="material-icons small teal-text grilla">do_not_disturb_off</i>
        <i class="material-icons small teal-text grilla">do_not_disturb_on</i>
        <i class="material-icons small teal-text grilla">dock</i>
        <i class="material-icons small teal-text grilla">domain</i>
        <i class="material-icons small teal-text grilla">done</i>
        <i class="material-icons small teal-text grilla">done_all</i>
        <i class="material-icons small teal-text grilla">donut_large</i>
        <i class="material-icons small teal-text grilla">donut_small</i>
        <i class="material-icons small teal-text grilla">drafts</i>
        <i class="material-icons small teal-text grilla">drag_handle</i>
        <i class="material-icons small teal-text grilla">drive_eta</i>
        <i class="material-icons small teal-text grilla">dvr</i>
        <i class="material-icons small teal-text grilla">edit</i>
        <i class="material-icons small teal-text grilla">edit_location</i>
        <i class="material-icons small teal-text grilla">eject</i>
        <i class="material-icons small teal-text grilla">email</i>
        <i class="material-icons small teal-text grilla">enhanced_encryption</i>
        <i class="material-icons small teal-text grilla">equalizer</i>
        <i class="material-icons small teal-text grilla">error</i>
        <i class="material-icons small teal-text grilla">error_outline</i>
        <i class="material-icons small teal-text grilla">euro_symbol</i>
        <i class="material-icons small teal-text grilla">ev_station</i>
        <i class="material-icons small teal-text grilla">event</i>
        <i class="material-icons small teal-text grilla">event_available</i>
        <i class="material-icons small teal-text grilla">event_busy</i>
        <i class="material-icons small teal-text grilla">event_note</i>
        <i class="material-icons small teal-text grilla">event_seat</i>
        <i class="material-icons small teal-text grilla">exit_to_app</i>
        <i class="material-icons small teal-text grilla">expand_less</i>
        <i class="material-icons small teal-text grilla">expand_more</i>
        <i class="material-icons small teal-text grilla">explicit</i>
        <i class="material-icons small teal-text grilla">explore</i>
        <i class="material-icons small teal-text grilla">exposure</i>
        <i class="material-icons small teal-text grilla">exposure_neg_1</i>
        <i class="material-icons small teal-text grilla">exposure_neg_2</i>
        <i class="material-icons small teal-text grilla">exposure_plus_1</i>
        <i class="material-icons small teal-text grilla">exposure_plus_2</i>
        <i class="material-icons small teal-text grilla">exposure_zero</i>
        <i class="material-icons small teal-text grilla">extension</i>
        <i class="material-icons small teal-text grilla">face</i>
        <i class="material-icons small teal-text grilla">fast_forward</i>
        <i class="material-icons small teal-text grilla">fast_rewind</i>
        <i class="material-icons small teal-text grilla">favorite</i>
        <i class="material-icons small teal-text grilla">favorite_border</i>
        <i class="material-icons small teal-text grilla">featured_play_list</i>
        <i class="material-icons small teal-text grilla">featured_video</i>
        <i class="material-icons small teal-text grilla">feedback</i>
        <i class="material-icons small teal-text grilla">fiber_dvr</i>
        <i class="material-icons small teal-text grilla">fiber_manual_record</i>
        <i class="material-icons small teal-text grilla">fiber_new</i>
        <i class="material-icons small teal-text grilla">fiber_pin</i>
        <i class="material-icons small teal-text grilla">fiber_smart_record</i>
        <i class="material-icons small teal-text grilla">file_download</i>
        <i class="material-icons small teal-text grilla">file_upload</i>
        <i class="material-icons small teal-text grilla">filter</i>
        <i class="material-icons small teal-text grilla">filter_1</i>
        <i class="material-icons small teal-text grilla">filter_2</i>
        <i class="material-icons small teal-text grilla">filter_3</i>
        <i class="material-icons small teal-text grilla">filter_4</i>
        <i class="material-icons small teal-text grilla">filter_5</i>
        <i class="material-icons small teal-text grilla">filter_6</i>
        <i class="material-icons small teal-text grilla">filter_7</i>
        <i class="material-icons small teal-text grilla">filter_8</i>
        <i class="material-icons small teal-text grilla">filter_9</i>
        <i class="material-icons small teal-text grilla">filter_9_plus</i>
        <i class="material-icons small teal-text grilla">filter_b_and_w</i>
        <i class="material-icons small teal-text grilla">filter_center_focus</i>
        <i class="material-icons small teal-text grilla">filter_drama</i>
        <i class="material-icons small teal-text grilla">filter_frames</i>
        <i class="material-icons small teal-text grilla">filter_hdr</i>
        <i class="material-icons small teal-text grilla">filter_list</i>
        <i class="material-icons small teal-text grilla">filter_none</i>
        <i class="material-icons small teal-text grilla">filter_tilt_shift</i>
        <i class="material-icons small teal-text grilla">filter_vintage</i>
        <i class="material-icons small teal-text grilla">find_in_page</i>
        <i class="material-icons small teal-text grilla">find_replace</i>
        <i class="material-icons small teal-text grilla">fingerprint</i>
        <i class="material-icons small teal-text grilla">first_page</i>
        <i class="material-icons small teal-text grilla">fitness_center</i>
        <i class="material-icons small teal-text grilla">flag</i>
        <i class="material-icons small teal-text grilla">flare</i>
        <i class="material-icons small teal-text grilla">flash_auto</i>
        <i class="material-icons small teal-text grilla">flash_off</i>
        <i class="material-icons small teal-text grilla">flash_on</i>
        <i class="material-icons small teal-text grilla">flight</i>
        <i class="material-icons small teal-text grilla">flight_land</i>
        <i class="material-icons small teal-text grilla">flight_takeoff</i>
        <i class="material-icons small teal-text grilla">flip</i>
        <i class="material-icons small teal-text grilla">flip_to_back</i>
        <i class="material-icons small teal-text grilla">flip_to_front</i>
        <i class="material-icons small teal-text grilla">folder</i>
        <i class="material-icons small teal-text grilla">folder_open</i>
        <i class="material-icons small teal-text grilla">folder_shared</i>
        <i class="material-icons small teal-text grilla">folder_special</i>
        <i class="material-icons small teal-text grilla">font_download</i>
        <i class="material-icons small teal-text grilla">format_align_center</i>
        <i class="material-icons small teal-text grilla">format_align_justify</i>
        <i class="material-icons small teal-text grilla">format_align_left</i>
        <i class="material-icons small teal-text grilla">format_align_right</i>
        <i class="material-icons small teal-text grilla">format_bold</i>
        <i class="material-icons small teal-text grilla">format_clear</i>
        <i class="material-icons small teal-text grilla">format_color_fill</i>
        <i class="material-icons small teal-text grilla">format_color_reset</i>
        <i class="material-icons small teal-text grilla">format_color_text</i>
        <i class="material-icons small teal-text grilla">format_indent_decrease</i>
        <i class="material-icons small teal-text grilla">format_indent_increase</i>
        <i class="material-icons small teal-text grilla">format_italic</i>
        <i class="material-icons small teal-text grilla">format_line_spacing</i>
        <i class="material-icons small teal-text grilla">format_list_bulleted</i>
        <i class="material-icons small teal-text grilla">format_list_numbered</i>
        <i class="material-icons small teal-text grilla">format_paint</i>
        <i class="material-icons small teal-text grilla">format_quote</i>
        <i class="material-icons small teal-text grilla">format_shapes</i>
        <i class="material-icons small teal-text grilla">format_size</i>
        <i class="material-icons small teal-text grilla">format_strikethrough</i>
        <i class="material-icons small teal-text grilla">format_textdirection_l_to_r</i>
        <i class="material-icons small teal-text grilla">format_textdirection_r_to_l</i>
        <i class="material-icons small teal-text grilla">format_underlined</i>
        <i class="material-icons small teal-text grilla">forum</i>
        <i class="material-icons small teal-text grilla">forward</i>
        <i class="material-icons small teal-text grilla">forward_10</i>
        <i class="material-icons small teal-text grilla">forward_30</i>
        <i class="material-icons small teal-text grilla">forward_5</i>
        <i class="material-icons small teal-text grilla">free_breakfast</i>
        <i class="material-icons small teal-text grilla">fullscreen</i>
        <i class="material-icons small teal-text grilla">fullscreen_exit</i>
        <i class="material-icons small teal-text grilla">functions</i>
        <i class="material-icons small teal-text grilla">g_translate</i>
        <i class="material-icons small teal-text grilla">gamepad</i>
        <i class="material-icons small teal-text grilla">games</i>
        <i class="material-icons small teal-text grilla">gavel</i>
        <i class="material-icons small teal-text grilla">gesture</i>
        <i class="material-icons small teal-text grilla">get_app</i>
        <i class="material-icons small teal-text grilla">gif</i>
        <i class="material-icons small teal-text grilla">golf_course</i>
        <i class="material-icons small teal-text grilla">gps_fixed</i>
        <i class="material-icons small teal-text grilla">gps_not_fixed</i>
        <i class="material-icons small teal-text grilla">gps_off</i>
        <i class="material-icons small teal-text grilla">grade</i>
        <i class="material-icons small teal-text grilla">gradient</i>
        <i class="material-icons small teal-text grilla">grain</i>
        <i class="material-icons small teal-text grilla">graphic_eq</i>
        <i class="material-icons small teal-text grilla">grid_off</i>
        <i class="material-icons small teal-text grilla">grid_on</i>
        <i class="material-icons small teal-text grilla">group</i>
        <i class="material-icons small teal-text grilla">group_add</i>
        <i class="material-icons small teal-text grilla">group_work</i>
        <i class="material-icons small teal-text grilla">hd</i>
        <i class="material-icons small teal-text grilla">hdr_off</i>
        <i class="material-icons small teal-text grilla">hdr_on</i>
        <i class="material-icons small teal-text grilla">hdr_strong</i>
        <i class="material-icons small teal-text grilla">hdr_weak</i>
        <i class="material-icons small teal-text grilla">headset</i>
        <i class="material-icons small teal-text grilla">headset_mic</i>
        <i class="material-icons small teal-text grilla">healing</i>
        <i class="material-icons small teal-text grilla">hearing</i>
        <i class="material-icons small teal-text grilla">help</i>
        <i class="material-icons small teal-text grilla">help_outline</i>
        <i class="material-icons small teal-text grilla">high_quality</i>
        <i class="material-icons small teal-text grilla">highlight</i>
        <i class="material-icons small teal-text grilla">highlight_off</i>
        <i class="material-icons small teal-text grilla">history</i>
        <i class="material-icons small teal-text grilla">home</i>
        <i class="material-icons small teal-text grilla">hot_tub</i>
        <i class="material-icons small teal-text grilla">hotel</i>
        <i class="material-icons small teal-text grilla">hourglass_empty</i>
        <i class="material-icons small teal-text grilla">hourglass_full</i>
        <i class="material-icons small teal-text grilla">http</i>
        <i class="material-icons small teal-text grilla">https</i>
        <i class="material-icons small teal-text grilla">image</i>
        <i class="material-icons small teal-text grilla">image_aspect_ratio</i>
        <i class="material-icons small teal-text grilla">import_contacts</i>
        <i class="material-icons small teal-text grilla">import_export</i>
        <i class="material-icons small teal-text grilla">important_devices</i>
        <i class="material-icons small teal-text grilla">inbox</i>
        <i class="material-icons small teal-text grilla">indeterminate_check_box</i>
        <i class="material-icons small teal-text grilla">info</i>
        <i class="material-icons small teal-text grilla">info_outline</i>
        <i class="material-icons small teal-text grilla">input</i>
        <i class="material-icons small teal-text grilla">insert_chart</i>
        <i class="material-icons small teal-text grilla">insert_comment</i>
        <i class="material-icons small teal-text grilla">insert_drive_file</i>
        <i class="material-icons small teal-text grilla">insert_emoticon</i>
        <i class="material-icons small teal-text grilla">insert_invitation</i>
        <i class="material-icons small teal-text grilla">insert_link</i>
        <i class="material-icons small teal-text grilla">insert_photo</i>
        <i class="material-icons small teal-text grilla">invert_colors</i>
        <i class="material-icons small teal-text grilla">invert_colors_off</i>
        <i class="material-icons small teal-text grilla">iso</i>
        <i class="material-icons small teal-text grilla">keyboard</i>
        <i class="material-icons small teal-text grilla">keyboard_arrow_down</i>
        <i class="material-icons small teal-text grilla">keyboard_arrow_left</i>
        <i class="material-icons small teal-text grilla">keyboard_arrow_right</i>
        <i class="material-icons small teal-text grilla">keyboard_arrow_up</i>
        <i class="material-icons small teal-text grilla">keyboard_backspace</i>
        <i class="material-icons small teal-text grilla">keyboard_capslock</i>
        <i class="material-icons small teal-text grilla">keyboard_hide</i>
        <i class="material-icons small teal-text grilla">keyboard_return</i>
        <i class="material-icons small teal-text grilla">keyboard_tab</i>
        <i class="material-icons small teal-text grilla">keyboard_voice</i>
        <i class="material-icons small teal-text grilla">kitchen</i>
        <i class="material-icons small teal-text grilla">label</i>
        <i class="material-icons small teal-text grilla">label_outline</i>
        <i class="material-icons small teal-text grilla">landscape</i>
        <i class="material-icons small teal-text grilla">language</i>
        <i class="material-icons small teal-text grilla">laptop</i>
        <i class="material-icons small teal-text grilla">laptop_chromebook</i>
        <i class="material-icons small teal-text grilla">laptop_mac</i>
        <i class="material-icons small teal-text grilla">laptop_windows</i>
        <i class="material-icons small teal-text grilla">last_page</i>
        <i class="material-icons small teal-text grilla">launch</i>
        <i class="material-icons small teal-text grilla">layers</i>
        <i class="material-icons small teal-text grilla">layers_clear</i>
        <i class="material-icons small teal-text grilla">leak_add</i>
        <i class="material-icons small teal-text grilla">leak_remove</i>
        <i class="material-icons small teal-text grilla">lens</i>
        <i class="material-icons small teal-text grilla">library_add</i>
        <i class="material-icons small teal-text grilla">library_books</i>
        <i class="material-icons small teal-text grilla">library_music</i>
        <i class="material-icons small teal-text grilla">lightbulb_outline</i>
        <i class="material-icons small teal-text grilla">line_style</i>
        <i class="material-icons small teal-text grilla">line_weight</i>
        <i class="material-icons small teal-text grilla">linear_scale</i>
        <i class="material-icons small teal-text grilla">link</i>
        <i class="material-icons small teal-text grilla">linked_camera</i>
        <i class="material-icons small teal-text grilla">list</i>
        <i class="material-icons small teal-text grilla">live_help</i>
        <i class="material-icons small teal-text grilla">live_tv</i>
        <i class="material-icons small teal-text grilla">local_activity</i>
        <i class="material-icons small teal-text grilla">local_airport</i>
        <i class="material-icons small teal-text grilla">local_atm</i>
        <i class="material-icons small teal-text grilla">local_bar</i>
        <i class="material-icons small teal-text grilla">local_cafe</i>
        <i class="material-icons small teal-text grilla">local_car_wash</i>
        <i class="material-icons small teal-text grilla">local_convenience_store</i>
        <i class="material-icons small teal-text grilla">local_dining</i>
        <i class="material-icons small teal-text grilla">local_drink</i>
        <i class="material-icons small teal-text grilla">local_florist</i>
        <i class="material-icons small teal-text grilla">local_gas_station</i>
        <i class="material-icons small teal-text grilla">local_grocery_store</i>
        <i class="material-icons small teal-text grilla">local_hospital</i>
        <i class="material-icons small teal-text grilla">local_hotel</i>
        <i class="material-icons small teal-text grilla">local_laundry_service</i>
        <i class="material-icons small teal-text grilla">local_library</i>
        <i class="material-icons small teal-text grilla">local_mall</i>
        <i class="material-icons small teal-text grilla">local_movies</i>
        <i class="material-icons small teal-text grilla">local_offer</i>
        <i class="material-icons small teal-text grilla">local_parking</i>
        <i class="material-icons small teal-text grilla">local_pharmacy</i>
        <i class="material-icons small teal-text grilla">local_phone</i>
        <i class="material-icons small teal-text grilla">local_pizza</i>
        <i class="material-icons small teal-text grilla">local_play</i>
        <i class="material-icons small teal-text grilla">local_post_office</i>
        <i class="material-icons small teal-text grilla">local_printshop</i>
        <i class="material-icons small teal-text grilla">local_see</i>
        <i class="material-icons small teal-text grilla">local_shipping</i>
        <i class="material-icons small teal-text grilla">local_taxi</i>
        <i class="material-icons small teal-text grilla">location_city</i>
        <i class="material-icons small teal-text grilla">location_disabled</i>
        <i class="material-icons small teal-text grilla">location_off</i>
        <i class="material-icons small teal-text grilla">location_on</i>
        <i class="material-icons small teal-text grilla">location_searching</i>
        <i class="material-icons small teal-text grilla">lock</i>
        <i class="material-icons small teal-text grilla">lock_open</i>
        <i class="material-icons small teal-text grilla">lock_outline</i>
        <i class="material-icons small teal-text grilla">looks</i>
        <i class="material-icons small teal-text grilla">looks_3</i>
        <i class="material-icons small teal-text grilla">looks_4</i>
        <i class="material-icons small teal-text grilla">looks_5</i>
        <i class="material-icons small teal-text grilla">looks_6</i>
        <i class="material-icons small teal-text grilla">looks_one</i>
        <i class="material-icons small teal-text grilla">looks_two</i>
        <i class="material-icons small teal-text grilla">loop</i>
        <i class="material-icons small teal-text grilla">loupe</i>
        <i class="material-icons small teal-text grilla">low_priority</i>
        <i class="material-icons small teal-text grilla">loyalty</i>
        <i class="material-icons small teal-text grilla">mail</i>
        <i class="material-icons small teal-text grilla">mail_outline</i>
        <i class="material-icons small teal-text grilla">map</i>
        <i class="material-icons small teal-text grilla">markunread</i>
        <i class="material-icons small teal-text grilla">markunread_mailbox</i>
        <i class="material-icons small teal-text grilla">memory</i>
        <i class="material-icons small teal-text grilla">menu</i>
        <i class="material-icons small teal-text grilla">merge_type</i>
        <i class="material-icons small teal-text grilla">message</i>
        <i class="material-icons small teal-text grilla">mic</i>
        <i class="material-icons small teal-text grilla">mic_none</i>
        <i class="material-icons small teal-text grilla">mic_off</i>
        <i class="material-icons small teal-text grilla">mms</i>
        <i class="material-icons small teal-text grilla">mode_comment</i>
        <i class="material-icons small teal-text grilla">mode_edit</i>
        <i class="material-icons small teal-text grilla">monetization_on</i>
        <i class="material-icons small teal-text grilla">money_off</i>
        <i class="material-icons small teal-text grilla">monochrome_photos</i>
        <i class="material-icons small teal-text grilla">mood</i>
        <i class="material-icons small teal-text grilla">mood_bad</i>
        <i class="material-icons small teal-text grilla">more</i>
        <i class="material-icons small teal-text grilla">more_horiz</i>
        <i class="material-icons small teal-text grilla">more_vert</i>
        <i class="material-icons small teal-text grilla">motorcycle</i>
        <i class="material-icons small teal-text grilla">mouse</i>
        <i class="material-icons small teal-text grilla">move_to_inbox</i>
        <i class="material-icons small teal-text grilla">movie</i>
        <i class="material-icons small teal-text grilla">movie_creation</i>
        <i class="material-icons small teal-text grilla">movie_filter</i>
        <i class="material-icons small teal-text grilla">multiline_chart</i>
        <i class="material-icons small teal-text grilla">music_note</i>
        <i class="material-icons small teal-text grilla">music_video</i>
        <i class="material-icons small teal-text grilla">my_location</i>
        <i class="material-icons small teal-text grilla">nature</i>
        <i class="material-icons small teal-text grilla">nature_people</i>
        <i class="material-icons small teal-text grilla">navigate_before</i>
        <i class="material-icons small teal-text grilla">navigate_next</i>
        <i class="material-icons small teal-text grilla">navigation</i>
        <i class="material-icons small teal-text grilla">near_me</i>
        <i class="material-icons small teal-text grilla">network_cell</i>
        <i class="material-icons small teal-text grilla">network_check</i>
        <i class="material-icons small teal-text grilla">network_locked</i>
        <i class="material-icons small teal-text grilla">network_wifi</i>
        <i class="material-icons small teal-text grilla">new_releases</i>
        <i class="material-icons small teal-text grilla">next_week</i>
        <i class="material-icons small teal-text grilla">nfc</i>
        <i class="material-icons small teal-text grilla">no_encryption</i>
        <i class="material-icons small teal-text grilla">no_sim</i>
        <i class="material-icons small teal-text grilla">not_interested</i>
        <i class="material-icons small teal-text grilla">note</i>
        <i class="material-icons small teal-text grilla">note_add</i>
        <i class="material-icons small teal-text grilla">notifications</i>
        <i class="material-icons small teal-text grilla">notifications_active</i>
        <i class="material-icons small teal-text grilla">notifications_none</i>
        <i class="material-icons small teal-text grilla">notifications_off</i>
        <i class="material-icons small teal-text grilla">notifications_paused</i>
        <i class="material-icons small teal-text grilla">offline_pin</i>
        <i class="material-icons small teal-text grilla">ondemand_video</i>
        <i class="material-icons small teal-text grilla">opacity</i>
        <i class="material-icons small teal-text grilla">open_in_browser</i>
        <i class="material-icons small teal-text grilla">open_in_new</i>
        <i class="material-icons small teal-text grilla">open_with</i>
        <i class="material-icons small teal-text grilla">pages</i>
        <i class="material-icons small teal-text grilla">pageview</i>
        <i class="material-icons small teal-text grilla">palette</i>
        <i class="material-icons small teal-text grilla">pan_tool</i>
        <i class="material-icons small teal-text grilla">panorama</i>
        <i class="material-icons small teal-text grilla">panorama_fish_eye</i>
        <i class="material-icons small teal-text grilla">panorama_horizontal</i>
        <i class="material-icons small teal-text grilla">panorama_vertical</i>
        <i class="material-icons small teal-text grilla">panorama_wide_angle</i>
        <i class="material-icons small teal-text grilla">party_mode</i>
        <i class="material-icons small teal-text grilla">pause</i>
        <i class="material-icons small teal-text grilla">pause_circle_filled</i>
        <i class="material-icons small teal-text grilla">pause_circle_outline</i>
        <i class="material-icons small teal-text grilla">payment</i>
        <i class="material-icons small teal-text grilla">people</i>
        <i class="material-icons small teal-text grilla">people_outline</i>
        <i class="material-icons small teal-text grilla">perm_camera_mic</i>
        <i class="material-icons small teal-text grilla">perm_contact_calendar</i>
        <i class="material-icons small teal-text grilla">perm_data_setting</i>
        <i class="material-icons small teal-text grilla">perm_device_information</i>
        <i class="material-icons small teal-text grilla">perm_identity</i>
        <i class="material-icons small teal-text grilla">perm_media</i>
        <i class="material-icons small teal-text grilla">perm_phone_msg</i>
        <i class="material-icons small teal-text grilla">perm_scan_wifi</i>
        <i class="material-icons small teal-text grilla">person</i>
        <i class="material-icons small teal-text grilla">person_add</i>
        <i class="material-icons small teal-text grilla">person_outline</i>
        <i class="material-icons small teal-text grilla">person_pin</i>
        <i class="material-icons small teal-text grilla">person_pin_circle</i>
        <i class="material-icons small teal-text grilla">personal_video</i>
        <i class="material-icons small teal-text grilla">pets</i>
        <i class="material-icons small teal-text grilla">phone</i>
        <i class="material-icons small teal-text grilla">phone_android</i>
        <i class="material-icons small teal-text grilla">phone_bluetooth_speaker</i>
        <i class="material-icons small teal-text grilla">phone_forwarded</i>
        <i class="material-icons small teal-text grilla">phone_in_talk</i>
        <i class="material-icons small teal-text grilla">phone_iphone</i>
        <i class="material-icons small teal-text grilla">phone_locked</i>
        <i class="material-icons small teal-text grilla">phone_missed</i>
        <i class="material-icons small teal-text grilla">phone_paused</i>
        <i class="material-icons small teal-text grilla">phonelink</i>
        <i class="material-icons small teal-text grilla">phonelink_erase</i>
        <i class="material-icons small teal-text grilla">phonelink_lock</i>
        <i class="material-icons small teal-text grilla">phonelink_off</i>
        <i class="material-icons small teal-text grilla">phonelink_ring</i>
        <i class="material-icons small teal-text grilla">phonelink_setup</i>
        <i class="material-icons small teal-text grilla">photo</i>
        <i class="material-icons small teal-text grilla">photo_album</i>
        <i class="material-icons small teal-text grilla">photo_camera</i>
        <i class="material-icons small teal-text grilla">photo_filter</i>
        <i class="material-icons small teal-text grilla">photo_library</i>
        <i class="material-icons small teal-text grilla">photo_size_select_actual</i>
        <i class="material-icons small teal-text grilla">photo_size_select_large</i>
        <i class="material-icons small teal-text grilla">photo_size_select_small</i>
        <i class="material-icons small teal-text grilla">picture_as_pdf</i>
        <i class="material-icons small teal-text grilla">picture_in_picture</i>
        <i class="material-icons small teal-text grilla">picture_in_picture_alt</i>
        <i class="material-icons small teal-text grilla">pie_chart</i>
        <i class="material-icons small teal-text grilla">pie_chart_outlined</i>
        <i class="material-icons small teal-text grilla">pin_drop</i>
        <i class="material-icons small teal-text grilla">place</i>
        <i class="material-icons small teal-text grilla">play_arrow</i>
        <i class="material-icons small teal-text grilla">play_circle_filled</i>
        <i class="material-icons small teal-text grilla">play_circle_outline</i>
        <i class="material-icons small teal-text grilla">play_for_work</i>
        <i class="material-icons small teal-text grilla">playlist_add</i>
        <i class="material-icons small teal-text grilla">playlist_add_check</i>
        <i class="material-icons small teal-text grilla">playlist_play</i>
        <i class="material-icons small teal-text grilla">plus_one</i>
        <i class="material-icons small teal-text grilla">poll</i>
        <i class="material-icons small teal-text grilla">polymer</i>
        <i class="material-icons small teal-text grilla">pool</i>
        <i class="material-icons small teal-text grilla">portable_wifi_off</i>
        <i class="material-icons small teal-text grilla">portrait</i>
        <i class="material-icons small teal-text grilla">power</i>
        <i class="material-icons small teal-text grilla">power_input</i>
        <i class="material-icons small teal-text grilla">power_settings_new</i>
        <i class="material-icons small teal-text grilla">pregnant_woman</i>
        <i class="material-icons small teal-text grilla">present_to_all</i>
        <i class="material-icons small teal-text grilla">print</i>
        <i class="material-icons small teal-text grilla">priority_high</i>
        <i class="material-icons small teal-text grilla">public</i>
        <i class="material-icons small teal-text grilla">publish</i>
        <i class="material-icons small teal-text grilla">query_builder</i>
        <i class="material-icons small teal-text grilla">question_answer</i>
        <i class="material-icons small teal-text grilla">queue</i>
        <i class="material-icons small teal-text grilla">queue_music</i>
        <i class="material-icons small teal-text grilla">queue_play_next</i>
        <i class="material-icons small teal-text grilla">radio</i>
        <i class="material-icons small teal-text grilla">radio_button_checked</i>
        <i class="material-icons small teal-text grilla">radio_button_unchecked</i>
        <i class="material-icons small teal-text grilla">rate_review</i>
        <i class="material-icons small teal-text grilla">receipt</i>
        <i class="material-icons small teal-text grilla">recent_actors</i>
        <i class="material-icons small teal-text grilla">record_voice_over</i>
        <i class="material-icons small teal-text grilla">redeem</i>
        <i class="material-icons small teal-text grilla">redo</i>
        <i class="material-icons small teal-text grilla">refresh</i>
        <i class="material-icons small teal-text grilla">remove</i>
        <i class="material-icons small teal-text grilla">remove_circle</i>
        <i class="material-icons small teal-text grilla">remove_circle_outline</i>
        <i class="material-icons small teal-text grilla">remove_from_queue</i>
        <i class="material-icons small teal-text grilla">remove_red_eye</i>
        <i class="material-icons small teal-text grilla">remove_shopping_cart</i>
        <i class="material-icons small teal-text grilla">reorder</i>
        <i class="material-icons small teal-text grilla">repeat</i>
        <i class="material-icons small teal-text grilla">repeat_one</i>
        <i class="material-icons small teal-text grilla">replay</i>
        <i class="material-icons small teal-text grilla">replay_10</i>
        <i class="material-icons small teal-text grilla">replay_30</i>
        <i class="material-icons small teal-text grilla">replay_5</i>
        <i class="material-icons small teal-text grilla">reply</i>
        <i class="material-icons small teal-text grilla">reply_all</i>
        <i class="material-icons small teal-text grilla">report</i>
        <i class="material-icons small teal-text grilla">report_problem</i>
        <i class="material-icons small teal-text grilla">restaurant</i>
        <i class="material-icons small teal-text grilla">restaurant_menu</i>
        <i class="material-icons small teal-text grilla">restore</i>
        <i class="material-icons small teal-text grilla">restore_page</i>
        <i class="material-icons small teal-text grilla">ring_volume</i>
        <i class="material-icons small teal-text grilla">room</i>
        <i class="material-icons small teal-text grilla">room_service</i>
        <i class="material-icons small teal-text grilla">rotate_90_degrees_ccw</i>
        <i class="material-icons small teal-text grilla">rotate_left</i>
        <i class="material-icons small teal-text grilla">rotate_right</i>
        <i class="material-icons small teal-text grilla">rounded_corner</i>
        <i class="material-icons small teal-text grilla">router</i>
        <i class="material-icons small teal-text grilla">rowing</i>
        <i class="material-icons small teal-text grilla">rss_feed</i>
        <i class="material-icons small teal-text grilla">rv_hookup</i>
        <i class="material-icons small teal-text grilla">satellite</i>
        <i class="material-icons small teal-text grilla">save</i>
        <i class="material-icons small teal-text grilla">scanner</i>
        <i class="material-icons small teal-text grilla">schedule</i>
        <i class="material-icons small teal-text grilla">school</i>
        <i class="material-icons small teal-text grilla">screen_lock_landscape</i>
        <i class="material-icons small teal-text grilla">screen_lock_portrait</i>
        <i class="material-icons small teal-text grilla">screen_lock_rotation</i>
        <i class="material-icons small teal-text grilla">screen_rotation</i>
        <i class="material-icons small teal-text grilla">screen_share</i>
        <i class="material-icons small teal-text grilla">sd_card</i>
        <i class="material-icons small teal-text grilla">sd_storage</i>
        <i class="material-icons small teal-text grilla">search</i>
        <i class="material-icons small teal-text grilla">security</i>
        <i class="material-icons small teal-text grilla">select_all</i>
        <i class="material-icons small teal-text grilla">send</i>
        <i class="material-icons small teal-text grilla">sentiment_dissatisfied</i>
        <i class="material-icons small teal-text grilla">sentiment_neutral</i>
        <i class="material-icons small teal-text grilla">sentiment_satisfied</i>
        <i class="material-icons small teal-text grilla">sentiment_very_dissatisfied</i>
        <i class="material-icons small teal-text grilla">sentiment_very_satisfied</i>
        <i class="material-icons small teal-text grilla">settings</i>
        <i class="material-icons small teal-text grilla">settings_applications</i>
        <i class="material-icons small teal-text grilla">settings_backup_restore</i>
        <i class="material-icons small teal-text grilla">settings_bluetooth</i>
        <i class="material-icons small teal-text grilla">settings_brightness</i>
        <i class="material-icons small teal-text grilla">settings_cell</i>
        <i class="material-icons small teal-text grilla">settings_ethernet</i>
        <i class="material-icons small teal-text grilla">settings_input_antenna</i>
        <i class="material-icons small teal-text grilla">settings_input_component</i>
        <i class="material-icons small teal-text grilla">settings_input_composite</i>
        <i class="material-icons small teal-text grilla">settings_input_hdmi</i>
        <i class="material-icons small teal-text grilla">settings_input_svideo</i>
        <i class="material-icons small teal-text grilla">settings_overscan</i>
        <i class="material-icons small teal-text grilla">settings_phone</i>
        <i class="material-icons small teal-text grilla">settings_power</i>
        <i class="material-icons small teal-text grilla">settings_remote</i>
        <i class="material-icons small teal-text grilla">settings_system_daydream</i>
        <i class="material-icons small teal-text grilla">settings_voice</i>
        <i class="material-icons small teal-text grilla">share</i>
        <i class="material-icons small teal-text grilla">shop</i>
        <i class="material-icons small teal-text grilla">shop_two</i>
        <i class="material-icons small teal-text grilla">shopping_basket</i>
        <i class="material-icons small teal-text grilla">shopping_cart</i>
        <i class="material-icons small teal-text grilla">short_text</i>
        <i class="material-icons small teal-text grilla">show_chart</i>
        <i class="material-icons small teal-text grilla">shuffle</i>
        <i class="material-icons small teal-text grilla">signal_cellular_4_bar</i>
        <i class="material-icons small teal-text grilla">signal_cellular_connected_no_internet_4_bar</i>
        <i class="material-icons small teal-text grilla">signal_cellular_no_sim</i>
        <i class="material-icons small teal-text grilla">signal_cellular_null</i>
        <i class="material-icons small teal-text grilla">signal_cellular_off</i>
        <i class="material-icons small teal-text grilla">signal_wifi_4_bar</i>
        <i class="material-icons small teal-text grilla">signal_wifi_4_bar_lock</i>
        <i class="material-icons small teal-text grilla">signal_wifi_off</i>
        <i class="material-icons small teal-text grilla">sim_card</i>
        <i class="material-icons small teal-text grilla">sim_card_alert</i>
        <i class="material-icons small teal-text grilla">skip_next</i>
        <i class="material-icons small teal-text grilla">skip_previous</i>
        <i class="material-icons small teal-text grilla">slideshow</i>
        <i class="material-icons small teal-text grilla">slow_motion_video</i>
        <i class="material-icons small teal-text grilla">smartphone</i>
        <i class="material-icons small teal-text grilla">smoke_free</i>
        <i class="material-icons small teal-text grilla">smoking_rooms</i>
        <i class="material-icons small teal-text grilla">sms</i>
        <i class="material-icons small teal-text grilla">sms_failed</i>
        <i class="material-icons small teal-text grilla">snooze</i>
        <i class="material-icons small teal-text grilla">sort</i>
        <i class="material-icons small teal-text grilla">sort_by_alpha</i>
        <i class="material-icons small teal-text grilla">spa</i>
        <i class="material-icons small teal-text grilla">space_bar</i>
        <i class="material-icons small teal-text grilla">speaker</i>
        <i class="material-icons small teal-text grilla">speaker_group</i>
        <i class="material-icons small teal-text grilla">speaker_notes</i>
        <i class="material-icons small teal-text grilla">speaker_notes_off</i>
        <i class="material-icons small teal-text grilla">speaker_phone</i>
        <i class="material-icons small teal-text grilla">spellcheck</i>
        <i class="material-icons small teal-text grilla">star</i>
        <i class="material-icons small teal-text grilla">star_border</i>
        <i class="material-icons small teal-text grilla">star_half</i>
        <i class="material-icons small teal-text grilla">stars</i>
        <i class="material-icons small teal-text grilla">stay_current_landscape</i>
        <i class="material-icons small teal-text grilla">stay_current_portrait</i>
        <i class="material-icons small teal-text grilla">stay_primary_landscape</i>
        <i class="material-icons small teal-text grilla">stay_primary_portrait</i>
        <i class="material-icons small teal-text grilla">stop</i>
        <i class="material-icons small teal-text grilla">stop_screen_share</i>
        <i class="material-icons small teal-text grilla">storage</i>
        <i class="material-icons small teal-text grilla">store</i>
        <i class="material-icons small teal-text grilla">store_mall_directory</i>
        <i class="material-icons small teal-text grilla">straighten</i>
        <i class="material-icons small teal-text grilla">streetview</i>
        <i class="material-icons small teal-text grilla">strikethrough_s</i>
        <i class="material-icons small teal-text grilla">style</i>
        <i class="material-icons small teal-text grilla">subdirectory_arrow_left</i>
        <i class="material-icons small teal-text grilla">subdirectory_arrow_right</i>
        <i class="material-icons small teal-text grilla">subject</i>
        <i class="material-icons small teal-text grilla">subscriptions</i>
        <i class="material-icons small teal-text grilla">subtitles</i>
        <i class="material-icons small teal-text grilla">subway</i>
        <i class="material-icons small teal-text grilla">supervisor_account</i>
        <i class="material-icons small teal-text grilla">surround_sound</i>
        <i class="material-icons small teal-text grilla">swap_calls</i>
        <i class="material-icons small teal-text grilla">swap_horiz</i>
        <i class="material-icons small teal-text grilla">swap_vert</i>
        <i class="material-icons small teal-text grilla">swap_vertical_circle</i>
        <i class="material-icons small teal-text grilla">switch_camera</i>
        <i class="material-icons small teal-text grilla">switch_video</i>
        <i class="material-icons small teal-text grilla">sync</i>
        <i class="material-icons small teal-text grilla">sync_disabled</i>
        <i class="material-icons small teal-text grilla">sync_problem</i>
        <i class="material-icons small teal-text grilla">system_update</i>
        <i class="material-icons small teal-text grilla">system_update_alt</i>
        <i class="material-icons small teal-text grilla">tab</i>
        <i class="material-icons small teal-text grilla">tab_unselected</i>
        <i class="material-icons small teal-text grilla">tablet</i>
        <i class="material-icons small teal-text grilla">tablet_android</i>
        <i class="material-icons small teal-text grilla">tablet_mac</i>
        <i class="material-icons small teal-text grilla">tag_faces</i>
        <i class="material-icons small teal-text grilla">tap_and_play</i>
        <i class="material-icons small teal-text grilla">terrain</i>
        <i class="material-icons small teal-text grilla">text_fields</i>
        <i class="material-icons small teal-text grilla">text_format</i>
        <i class="material-icons small teal-text grilla">textsms</i>
        <i class="material-icons small teal-text grilla">texture</i>
        <i class="material-icons small teal-text grilla">theaters</i>
        <i class="material-icons small teal-text grilla">thumb_down</i>
        <i class="material-icons small teal-text grilla">thumb_up</i>
        <i class="material-icons small teal-text grilla">thumbs_up_down</i>
        <i class="material-icons small teal-text grilla">time_to_leave</i>
        <i class="material-icons small teal-text grilla">timelapse</i>
        <i class="material-icons small teal-text grilla">timeline</i>
        <i class="material-icons small teal-text grilla">timer</i>
        <i class="material-icons small teal-text grilla">timer_10</i>
        <i class="material-icons small teal-text grilla">timer_3</i>
        <i class="material-icons small teal-text grilla">timer_off</i>
        <i class="material-icons small teal-text grilla">title</i>
        <i class="material-icons small teal-text grilla">toc</i>
        <i class="material-icons small teal-text grilla">today</i>
        <i class="material-icons small teal-text grilla">toll</i>
        <i class="material-icons small teal-text grilla">tonality</i>
        <i class="material-icons small teal-text grilla">touch_app</i>
        <i class="material-icons small teal-text grilla">toys</i>
        <i class="material-icons small teal-text grilla">track_changes</i>
        <i class="material-icons small teal-text grilla">traffic</i>
        <i class="material-icons small teal-text grilla">train</i>
        <i class="material-icons small teal-text grilla">tram</i>
        <i class="material-icons small teal-text grilla">transfer_within_a_station</i>
        <i class="material-icons small teal-text grilla">transform</i>
        <i class="material-icons small teal-text grilla">translate</i>
        <i class="material-icons small teal-text grilla">trending_down</i>
        <i class="material-icons small teal-text grilla">trending_flat</i>
        <i class="material-icons small teal-text grilla">trending_up</i>
        <i class="material-icons small teal-text grilla">tune</i>
        <i class="material-icons small teal-text grilla">turned_in</i>
        <i class="material-icons small teal-text grilla">turned_in_not</i>
        <i class="material-icons small teal-text grilla">tv</i>
        <i class="material-icons small teal-text grilla">unarchive</i>
        <i class="material-icons small teal-text grilla">undo</i>
        <i class="material-icons small teal-text grilla">unfold_less</i>
        <i class="material-icons small teal-text grilla">unfold_more</i>
        <i class="material-icons small teal-text grilla">update</i>
        <i class="material-icons small teal-text grilla">usb</i>
        <i class="material-icons small teal-text grilla">verified_user</i>
        <i class="material-icons small teal-text grilla">vertical_align_bottom</i>
        <i class="material-icons small teal-text grilla">vertical_align_center</i>
        <i class="material-icons small teal-text grilla">vertical_align_top</i>
        <i class="material-icons small teal-text grilla">vibration</i>
        <i class="material-icons small teal-text grilla">video_call</i>
        <i class="material-icons small teal-text grilla">video_label</i>
        <i class="material-icons small teal-text grilla">video_library</i>
        <i class="material-icons small teal-text grilla">videocam</i>
        <i class="material-icons small teal-text grilla">videocam_off</i>
        <i class="material-icons small teal-text grilla">videogame_asset</i>
        <i class="material-icons small teal-text grilla">view_agenda</i>
        <i class="material-icons small teal-text grilla">view_array</i>
        <i class="material-icons small teal-text grilla">view_carousel</i>
        <i class="material-icons small teal-text grilla">view_column</i>
        <i class="material-icons small teal-text grilla">view_comfy</i>
        <i class="material-icons small teal-text grilla">view_compact</i>
        <i class="material-icons small teal-text grilla">view_day</i>
        <i class="material-icons small teal-text grilla">view_headline</i>
        <i class="material-icons small teal-text grilla">view_list</i>
        <i class="material-icons small teal-text grilla">view_module</i>
        <i class="material-icons small teal-text grilla">view_quilt</i>
        <i class="material-icons small teal-text grilla">view_stream</i>
        <i class="material-icons small teal-text grilla">view_week</i>
        <i class="material-icons small teal-text grilla">vignette</i>
        <i class="material-icons small teal-text grilla">visibility</i>
        <i class="material-icons small teal-text grilla">visibility_off</i>
        <i class="material-icons small teal-text grilla">voice_chat</i>
        <i class="material-icons small teal-text grilla">voicemail</i>
        <i class="material-icons small teal-text grilla">volume_down</i>
        <i class="material-icons small teal-text grilla">volume_mute</i>
        <i class="material-icons small teal-text grilla">volume_off</i>
        <i class="material-icons small teal-text grilla">volume_up</i>
        <i class="material-icons small teal-text grilla">vpn_key</i>
        <i class="material-icons small teal-text grilla">vpn_lock</i>
        <i class="material-icons small teal-text grilla">wallpaper</i>
        <i class="material-icons small teal-text grilla">warning</i>
        <i class="material-icons small teal-text grilla">watch</i>
        <i class="material-icons small teal-text grilla">watch_later</i>
        <i class="material-icons small teal-text grilla">wb_auto</i>
        <i class="material-icons small teal-text grilla">wb_cloudy</i>
        <i class="material-icons small teal-text grilla">wb_incandescent</i>
        <i class="material-icons small teal-text grilla">wb_iridescent</i>
        <i class="material-icons small teal-text grilla">wb_sunny</i>
        <i class="material-icons small teal-text grilla">wc</i>
        <i class="material-icons small teal-text grilla">web</i>
        <i class="material-icons small teal-text grilla">web_asset</i>
        <i class="material-icons small teal-text grilla">weekend</i>
        <i class="material-icons small teal-text grilla">whatshot</i>
        <i class="material-icons small teal-text grilla">widgets</i>
        <i class="material-icons small teal-text grilla">wifi</i>
        <i class="material-icons small teal-text grilla">wifi_lock</i>
        <i class="material-icons small teal-text grilla">wifi_tethering</i>
        <i class="material-icons small teal-text grilla">work</i>
        <i class="material-icons small teal-text grilla">wrap_text</i>
        <i class="material-icons small teal-text grilla">youtube_searched_for</i>
        <i class="material-icons small teal-text grilla">zoom_in</i>
        <i class="material-icons small teal-text grilla">zoom_out</i>
        <i class="material-icons small teal-text grilla">zoom_out_map</i>
      </div>
    </div>
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