<?php
  $edit = false;
  if (array_key_exists('dataEditCategoria', $data)){
    $edit = true;
  }
  if (isset($mensaje)){
    echo "M.toast({html: '".$mensaje."'})";
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

      <div class="col s12" id="grilla">
        <i class="material-icons small teal-text icono">3d_rotation</i>
        <i class="material-icons small teal-text icono">ac_unit</i>
        <i class="material-icons small teal-text icono">access_alarm</i>
        <i class="material-icons small teal-text icono">access_alarms</i>
        <i class="material-icons small teal-text icono">access_time</i>
        <i class="material-icons small teal-text icono">accessibility</i>
        <i class="material-icons small teal-text icono">accessible</i>
        <i class="material-icons small teal-text icono">account_balance</i>
        <i class="material-icons small teal-text icono">account_balance_wallet</i>
        <i class="material-icons small teal-text icono">account_box</i>
        <i class="material-icons small teal-text icono">account_circle</i>
        <i class="material-icons small teal-text icono">adb</i>
        <i class="material-icons small teal-text icono">add</i>
        <i class="material-icons small teal-text icono">add_a_photo</i>
        <i class="material-icons small teal-text icono">add_alarm</i>
        <i class="material-icons small teal-text icono">add_alert</i>
        <i class="material-icons small teal-text icono">add_box</i>
        <i class="material-icons small teal-text icono">add_circle</i>
        <i class="material-icons small teal-text icono">add_circle_outline</i>
        <i class="material-icons small teal-text icono">add_location</i>
        <i class="material-icons small teal-text icono">add_shopping_cart</i>
        <i class="material-icons small teal-text icono">add_to_photos</i>
        <i class="material-icons small teal-text icono">add_to_queue</i>
        <i class="material-icons small teal-text icono">adjust</i>
        <i class="material-icons small teal-text icono">airline_seat_flat</i>
        <i class="material-icons small teal-text icono">airline_seat_flat_angled</i>
        <i class="material-icons small teal-text icono">airline_seat_individual_suite</i>
        <i class="material-icons small teal-text icono">airline_seat_legroom_extra</i>
        <i class="material-icons small teal-text icono">airline_seat_legroom_normal</i>
        <i class="material-icons small teal-text icono">airline_seat_legroom_reduced</i>
        <i class="material-icons small teal-text icono">airline_seat_recline_extra</i>
        <i class="material-icons small teal-text icono">airline_seat_recline_normal</i>
        <i class="material-icons small teal-text icono">airplanemode_active</i>
        <i class="material-icons small teal-text icono">airplanemode_inactive</i>
        <i class="material-icons small teal-text icono">airplay</i>
        <i class="material-icons small teal-text icono">airport_shuttle</i>
        <i class="material-icons small teal-text icono">alarm</i>
        <i class="material-icons small teal-text icono">alarm_add</i>
        <i class="material-icons small teal-text icono">alarm_off</i>
        <i class="material-icons small teal-text icono">alarm_on</i>
        <i class="material-icons small teal-text icono">album</i>
        <i class="material-icons small teal-text icono">all_inclusive</i>
        <i class="material-icons small teal-text icono">all_out</i>
        <i class="material-icons small teal-text icono">android</i>
        <i class="material-icons small teal-text icono">announcement</i>
        <i class="material-icons small teal-text icono">apps</i>
        <i class="material-icons small teal-text icono">archive</i>
        <i class="material-icons small teal-text icono">arrow_back</i>
        <i class="material-icons small teal-text icono">arrow_downward</i>
        <i class="material-icons small teal-text icono">arrow_drop_down</i>
        <i class="material-icons small teal-text icono">arrow_drop_down_circle</i>
        <i class="material-icons small teal-text icono">arrow_drop_up</i>
        <i class="material-icons small teal-text icono">arrow_forward</i>
        <i class="material-icons small teal-text icono">arrow_upward</i>
        <i class="material-icons small teal-text icono">art_track</i>
        <i class="material-icons small teal-text icono">aspect_ratio</i>
        <i class="material-icons small teal-text icono">assessment</i>
        <i class="material-icons small teal-text icono">assignment</i>
        <i class="material-icons small teal-text icono">assignment_ind</i>
        <i class="material-icons small teal-text icono">assignment_late</i>
        <i class="material-icons small teal-text icono">assignment_return</i>
        <i class="material-icons small teal-text icono">assignment_returned</i>
        <i class="material-icons small teal-text icono">assignment_turned_in</i>
        <i class="material-icons small teal-text icono">assistant</i>
        <i class="material-icons small teal-text icono">assistant_photo</i>
        <i class="material-icons small teal-text icono">attach_file</i>
        <i class="material-icons small teal-text icono">attach_money</i>
        <i class="material-icons small teal-text icono">attachment</i>
        <i class="material-icons small teal-text icono">audiotrack</i>
        <i class="material-icons small teal-text icono">autorenew</i>
        <i class="material-icons small teal-text icono">av_timer</i>
        <i class="material-icons small teal-text icono">backspace</i>
        <i class="material-icons small teal-text icono">backup</i>
        <i class="material-icons small teal-text icono">battery_alert</i>
        <i class="material-icons small teal-text icono">battery_charging_full</i>
        <i class="material-icons small teal-text icono">battery_full</i>
        <i class="material-icons small teal-text icono">battery_std</i>
        <i class="material-icons small teal-text icono">battery_unknown</i>
        <i class="material-icons small teal-text icono">beach_access</i>
        <i class="material-icons small teal-text icono">beenhere</i>
        <i class="material-icons small teal-text icono">block</i>
        <i class="material-icons small teal-text icono">bluetooth</i>
        <i class="material-icons small teal-text icono">bluetooth_audio</i>
        <i class="material-icons small teal-text icono">bluetooth_connected</i>
        <i class="material-icons small teal-text icono">bluetooth_disabled</i>
        <i class="material-icons small teal-text icono">bluetooth_searching</i>
        <i class="material-icons small teal-text icono">blur_circular</i>
        <i class="material-icons small teal-text icono">blur_linear</i>
        <i class="material-icons small teal-text icono">blur_off</i>
        <i class="material-icons small teal-text icono">blur_on</i>
        <i class="material-icons small teal-text icono">book</i>
        <i class="material-icons small teal-text icono">bookmark</i>
        <i class="material-icons small teal-text icono">bookmark_border</i>
        <i class="material-icons small teal-text icono">border_all</i>
        <i class="material-icons small teal-text icono">border_bottom</i>
        <i class="material-icons small teal-text icono">border_clear</i>
        <i class="material-icons small teal-text icono">border_color</i>
        <i class="material-icons small teal-text icono">border_horizontal</i>
        <i class="material-icons small teal-text icono">border_inner</i>
        <i class="material-icons small teal-text icono">border_left</i>
        <i class="material-icons small teal-text icono">border_outer</i>
        <i class="material-icons small teal-text icono">border_right</i>
        <i class="material-icons small teal-text icono">border_style</i>
        <i class="material-icons small teal-text icono">border_top</i>
        <i class="material-icons small teal-text icono">border_vertical</i>
        <i class="material-icons small teal-text icono">branding_watermark</i>
        <i class="material-icons small teal-text icono">brightness_1</i>
        <i class="material-icons small teal-text icono">brightness_2</i>
        <i class="material-icons small teal-text icono">brightness_3</i>
        <i class="material-icons small teal-text icono">brightness_4</i>
        <i class="material-icons small teal-text icono">brightness_5</i>
        <i class="material-icons small teal-text icono">brightness_6</i>
        <i class="material-icons small teal-text icono">brightness_7</i>
        <i class="material-icons small teal-text icono">brightness_auto</i>
        <i class="material-icons small teal-text icono">brightness_high</i>
        <i class="material-icons small teal-text icono">brightness_low</i>
        <i class="material-icons small teal-text icono">brightness_medium</i>
        <i class="material-icons small teal-text icono">broken_image</i>
        <i class="material-icons small teal-text icono">brush</i>
        <i class="material-icons small teal-text icono">bubble_chart</i>
        <i class="material-icons small teal-text icono">bug_report</i>
        <i class="material-icons small teal-text icono">build</i>
        <i class="material-icons small teal-text icono">burst_mode</i>
        <i class="material-icons small teal-text icono">business</i>
        <i class="material-icons small teal-text icono">business_center</i>
        <i class="material-icons small teal-text icono">cached</i>
        <i class="material-icons small teal-text icono">cake</i>
        <i class="material-icons small teal-text icono">call</i>
        <i class="material-icons small teal-text icono">call_end</i>
        <i class="material-icons small teal-text icono">call_made</i>
        <i class="material-icons small teal-text icono">call_merge</i>
        <i class="material-icons small teal-text icono">call_missed</i>
        <i class="material-icons small teal-text icono">call_missed_outgoing</i>
        <i class="material-icons small teal-text icono">call_received</i>
        <i class="material-icons small teal-text icono">call_split</i>
        <i class="material-icons small teal-text icono">call_to_action</i>
        <i class="material-icons small teal-text icono">camera</i>
        <i class="material-icons small teal-text icono">camera_alt</i>
        <i class="material-icons small teal-text icono">camera_enhance</i>
        <i class="material-icons small teal-text icono">camera_front</i>
        <i class="material-icons small teal-text icono">camera_rear</i>
        <i class="material-icons small teal-text icono">camera_roll</i>
        <i class="material-icons small teal-text icono">cancel</i>
        <i class="material-icons small teal-text icono">card_giftcard</i>
        <i class="material-icons small teal-text icono">card_membership</i>
        <i class="material-icons small teal-text icono">card_travel</i>
        <i class="material-icons small teal-text icono">casino</i>
        <i class="material-icons small teal-text icono">cast</i>
        <i class="material-icons small teal-text icono">cast_connected</i>
        <i class="material-icons small teal-text icono">center_focus_strong</i>
        <i class="material-icons small teal-text icono">center_focus_weak</i>
        <i class="material-icons small teal-text icono">change_history</i>
        <i class="material-icons small teal-text icono">chat</i>
        <i class="material-icons small teal-text icono">chat_bubble</i>
        <i class="material-icons small teal-text icono">chat_bubble_outline</i>
        <i class="material-icons small teal-text icono">check</i>
        <i class="material-icons small teal-text icono">check_box</i>
        <i class="material-icons small teal-text icono">check_box_outline_blank</i>
        <i class="material-icons small teal-text icono">check_circle</i>
        <i class="material-icons small teal-text icono">chevron_left</i>
        <i class="material-icons small teal-text icono">chevron_right</i>
        <i class="material-icons small teal-text icono">child_care</i>
        <i class="material-icons small teal-text icono">child_friendly</i>
        <i class="material-icons small teal-text icono">chrome_reader_mode</i>
        <i class="material-icons small teal-text icono">class</i>
        <i class="material-icons small teal-text icono">clear</i>
        <i class="material-icons small teal-text icono">clear_all</i>
        <i class="material-icons small teal-text icono">close</i>
        <i class="material-icons small teal-text icono">closed_caption</i>
        <i class="material-icons small teal-text icono">cloud</i>
        <i class="material-icons small teal-text icono">cloud_circle</i>
        <i class="material-icons small teal-text icono">cloud_done</i>
        <i class="material-icons small teal-text icono">cloud_download</i>
        <i class="material-icons small teal-text icono">cloud_off</i>
        <i class="material-icons small teal-text icono">cloud_queue</i>
        <i class="material-icons small teal-text icono">cloud_upload</i>
        <i class="material-icons small teal-text icono">code</i>
        <i class="material-icons small teal-text icono">collections</i>
        <i class="material-icons small teal-text icono">collections_bookmark</i>
        <i class="material-icons small teal-text icono">color_lens</i>
        <i class="material-icons small teal-text icono">colorize</i>
        <i class="material-icons small teal-text icono">comment</i>
        <i class="material-icons small teal-text icono">compare</i>
        <i class="material-icons small teal-text icono">compare_arrows</i>
        <i class="material-icons small teal-text icono">computer</i>
        <i class="material-icons small teal-text icono">confirmation_number</i>
        <i class="material-icons small teal-text icono">contact_mail</i>
        <i class="material-icons small teal-text icono">contact_phone</i>
        <i class="material-icons small teal-text icono">contacts</i>
        <i class="material-icons small teal-text icono">content_copy</i>
        <i class="material-icons small teal-text icono">content_cut</i>
        <i class="material-icons small teal-text icono">content_paste</i>
        <i class="material-icons small teal-text icono">control_point</i>
        <i class="material-icons small teal-text icono">control_point_duplicate</i>
        <i class="material-icons small teal-text icono">copyright</i>
        <i class="material-icons small teal-text icono">create</i>
        <i class="material-icons small teal-text icono">create_new_folder</i>
        <i class="material-icons small teal-text icono">credit_card</i>
        <i class="material-icons small teal-text icono">crop</i>
        <i class="material-icons small teal-text icono">crop_16_9</i>
        <i class="material-icons small teal-text icono">crop_3_2</i>
        <i class="material-icons small teal-text icono">crop_5_4</i>
        <i class="material-icons small teal-text icono">crop_7_5</i>
        <i class="material-icons small teal-text icono">crop_din</i>
        <i class="material-icons small teal-text icono">crop_free</i>
        <i class="material-icons small teal-text icono">crop_landscape</i>
        <i class="material-icons small teal-text icono">crop_original</i>
        <i class="material-icons small teal-text icono">crop_portrait</i>
        <i class="material-icons small teal-text icono">crop_rotate</i>
        <i class="material-icons small teal-text icono">crop_square</i>
        <i class="material-icons small teal-text icono">dashboard</i>
        <i class="material-icons small teal-text icono">data_usage</i>
        <i class="material-icons small teal-text icono">date_range</i>
        <i class="material-icons small teal-text icono">dehaze</i>
        <i class="material-icons small teal-text icono">delete</i>
        <i class="material-icons small teal-text icono">delete_forever</i>
        <i class="material-icons small teal-text icono">delete_sweep</i>
        <i class="material-icons small teal-text icono">description</i>
        <i class="material-icons small teal-text icono">desktop_mac</i>
        <i class="material-icons small teal-text icono">desktop_windows</i>
        <i class="material-icons small teal-text icono">details</i>
        <i class="material-icons small teal-text icono">developer_board</i>
        <i class="material-icons small teal-text icono">developer_mode</i>
        <i class="material-icons small teal-text icono">device_hub</i>
        <i class="material-icons small teal-text icono">devices</i>
        <i class="material-icons small teal-text icono">devices_other</i>
        <i class="material-icons small teal-text icono">dialer_sip</i>
        <i class="material-icons small teal-text icono">dialpad</i>
        <i class="material-icons small teal-text icono">directions</i>
        <i class="material-icons small teal-text icono">directions_bike</i>
        <i class="material-icons small teal-text icono">directions_boat</i>
        <i class="material-icons small teal-text icono">directions_bus</i>
        <i class="material-icons small teal-text icono">directions_car</i>
        <i class="material-icons small teal-text icono">directions_railway</i>
        <i class="material-icons small teal-text icono">directions_run</i>
        <i class="material-icons small teal-text icono">directions_subway</i>
        <i class="material-icons small teal-text icono">directions_transit</i>
        <i class="material-icons small teal-text icono">directions_walk</i>
        <i class="material-icons small teal-text icono">disc_full</i>
        <i class="material-icons small teal-text icono">dns</i>
        <i class="material-icons small teal-text icono">do_not_disturb</i>
        <i class="material-icons small teal-text icono">do_not_disturb_alt</i>
        <i class="material-icons small teal-text icono">do_not_disturb_off</i>
        <i class="material-icons small teal-text icono">do_not_disturb_on</i>
        <i class="material-icons small teal-text icono">dock</i>
        <i class="material-icons small teal-text icono">domain</i>
        <i class="material-icons small teal-text icono">done</i>
        <i class="material-icons small teal-text icono">done_all</i>
        <i class="material-icons small teal-text icono">donut_large</i>
        <i class="material-icons small teal-text icono">donut_small</i>
        <i class="material-icons small teal-text icono">drafts</i>
        <i class="material-icons small teal-text icono">drag_handle</i>
        <i class="material-icons small teal-text icono">drive_eta</i>
        <i class="material-icons small teal-text icono">dvr</i>
        <i class="material-icons small teal-text icono">edit</i>
        <i class="material-icons small teal-text icono">edit_location</i>
        <i class="material-icons small teal-text icono">eject</i>
        <i class="material-icons small teal-text icono">email</i>
        <i class="material-icons small teal-text icono">enhanced_encryption</i>
        <i class="material-icons small teal-text icono">equalizer</i>
        <i class="material-icons small teal-text icono">error</i>
        <i class="material-icons small teal-text icono">error_outline</i>
        <i class="material-icons small teal-text icono">euro_symbol</i>
        <i class="material-icons small teal-text icono">ev_station</i>
        <i class="material-icons small teal-text icono">event</i>
        <i class="material-icons small teal-text icono">event_available</i>
        <i class="material-icons small teal-text icono">event_busy</i>
        <i class="material-icons small teal-text icono">event_note</i>
        <i class="material-icons small teal-text icono">event_seat</i>
        <i class="material-icons small teal-text icono">exit_to_app</i>
        <i class="material-icons small teal-text icono">expand_less</i>
        <i class="material-icons small teal-text icono">expand_more</i>
        <i class="material-icons small teal-text icono">explicit</i>
        <i class="material-icons small teal-text icono">explore</i>
        <i class="material-icons small teal-text icono">exposure</i>
        <i class="material-icons small teal-text icono">exposure_neg_1</i>
        <i class="material-icons small teal-text icono">exposure_neg_2</i>
        <i class="material-icons small teal-text icono">exposure_plus_1</i>
        <i class="material-icons small teal-text icono">exposure_plus_2</i>
        <i class="material-icons small teal-text icono">exposure_zero</i>
        <i class="material-icons small teal-text icono">extension</i>
        <i class="material-icons small teal-text icono">face</i>
        <i class="material-icons small teal-text icono">fast_forward</i>
        <i class="material-icons small teal-text icono">fast_rewind</i>
        <i class="material-icons small teal-text icono">favorite</i>
        <i class="material-icons small teal-text icono">favorite_border</i>
        <i class="material-icons small teal-text icono">featured_play_list</i>
        <i class="material-icons small teal-text icono">featured_video</i>
        <i class="material-icons small teal-text icono">feedback</i>
        <i class="material-icons small teal-text icono">fiber_dvr</i>
        <i class="material-icons small teal-text icono">fiber_manual_record</i>
        <i class="material-icons small teal-text icono">fiber_new</i>
        <i class="material-icons small teal-text icono">fiber_pin</i>
        <i class="material-icons small teal-text icono">fiber_smart_record</i>
        <i class="material-icons small teal-text icono">file_download</i>
        <i class="material-icons small teal-text icono">file_upload</i>
        <i class="material-icons small teal-text icono">filter</i>
        <i class="material-icons small teal-text icono">filter_1</i>
        <i class="material-icons small teal-text icono">filter_2</i>
        <i class="material-icons small teal-text icono">filter_3</i>
        <i class="material-icons small teal-text icono">filter_4</i>
        <i class="material-icons small teal-text icono">filter_5</i>
        <i class="material-icons small teal-text icono">filter_6</i>
        <i class="material-icons small teal-text icono">filter_7</i>
        <i class="material-icons small teal-text icono">filter_8</i>
        <i class="material-icons small teal-text icono">filter_9</i>
        <i class="material-icons small teal-text icono">filter_9_plus</i>
        <i class="material-icons small teal-text icono">filter_b_and_w</i>
        <i class="material-icons small teal-text icono">filter_center_focus</i>
        <i class="material-icons small teal-text icono">filter_drama</i>
        <i class="material-icons small teal-text icono">filter_frames</i>
        <i class="material-icons small teal-text icono">filter_hdr</i>
        <i class="material-icons small teal-text icono">filter_list</i>
        <i class="material-icons small teal-text icono">filter_none</i>
        <i class="material-icons small teal-text icono">filter_tilt_shift</i>
        <i class="material-icons small teal-text icono">filter_vintage</i>
        <i class="material-icons small teal-text icono">find_in_page</i>
        <i class="material-icons small teal-text icono">find_replace</i>
        <i class="material-icons small teal-text icono">fingerprint</i>
        <i class="material-icons small teal-text icono">first_page</i>
        <i class="material-icons small teal-text icono">fitness_center</i>
        <i class="material-icons small teal-text icono">flag</i>
        <i class="material-icons small teal-text icono">flare</i>
        <i class="material-icons small teal-text icono">flash_auto</i>
        <i class="material-icons small teal-text icono">flash_off</i>
        <i class="material-icons small teal-text icono">flash_on</i>
        <i class="material-icons small teal-text icono">flight</i>
        <i class="material-icons small teal-text icono">flight_land</i>
        <i class="material-icons small teal-text icono">flight_takeoff</i>
        <i class="material-icons small teal-text icono">flip</i>
        <i class="material-icons small teal-text icono">flip_to_back</i>
        <i class="material-icons small teal-text icono">flip_to_front</i>
        <i class="material-icons small teal-text icono">folder</i>
        <i class="material-icons small teal-text icono">folder_open</i>
        <i class="material-icons small teal-text icono">folder_shared</i>
        <i class="material-icons small teal-text icono">folder_special</i>
        <i class="material-icons small teal-text icono">font_download</i>
        <i class="material-icons small teal-text icono">format_align_center</i>
        <i class="material-icons small teal-text icono">format_align_justify</i>
        <i class="material-icons small teal-text icono">format_align_left</i>
        <i class="material-icons small teal-text icono">format_align_right</i>
        <i class="material-icons small teal-text icono">format_bold</i>
        <i class="material-icons small teal-text icono">format_clear</i>
        <i class="material-icons small teal-text icono">format_color_fill</i>
        <i class="material-icons small teal-text icono">format_color_reset</i>
        <i class="material-icons small teal-text icono">format_color_text</i>
        <i class="material-icons small teal-text icono">format_indent_decrease</i>
        <i class="material-icons small teal-text icono">format_indent_increase</i>
        <i class="material-icons small teal-text icono">format_italic</i>
        <i class="material-icons small teal-text icono">format_line_spacing</i>
        <i class="material-icons small teal-text icono">format_list_bulleted</i>
        <i class="material-icons small teal-text icono">format_list_numbered</i>
        <i class="material-icons small teal-text icono">format_paint</i>
        <i class="material-icons small teal-text icono">format_quote</i>
        <i class="material-icons small teal-text icono">format_shapes</i>
        <i class="material-icons small teal-text icono">format_size</i>
        <i class="material-icons small teal-text icono">format_strikethrough</i>
        <i class="material-icons small teal-text icono">format_textdirection_l_to_r</i>
        <i class="material-icons small teal-text icono">format_textdirection_r_to_l</i>
        <i class="material-icons small teal-text icono">format_underlined</i>
        <i class="material-icons small teal-text icono">forum</i>
        <i class="material-icons small teal-text icono">forward</i>
        <i class="material-icons small teal-text icono">forward_10</i>
        <i class="material-icons small teal-text icono">forward_30</i>
        <i class="material-icons small teal-text icono">forward_5</i>
        <i class="material-icons small teal-text icono">free_breakfast</i>
        <i class="material-icons small teal-text icono">fullscreen</i>
        <i class="material-icons small teal-text icono">fullscreen_exit</i>
        <i class="material-icons small teal-text icono">functions</i>
        <i class="material-icons small teal-text icono">g_translate</i>
        <i class="material-icons small teal-text icono">gamepad</i>
        <i class="material-icons small teal-text icono">games</i>
        <i class="material-icons small teal-text icono">gavel</i>
        <i class="material-icons small teal-text icono">gesture</i>
        <i class="material-icons small teal-text icono">get_app</i>
        <i class="material-icons small teal-text icono">gif</i>
        <i class="material-icons small teal-text icono">golf_course</i>
        <i class="material-icons small teal-text icono">gps_fixed</i>
        <i class="material-icons small teal-text icono">gps_not_fixed</i>
        <i class="material-icons small teal-text icono">gps_off</i>
        <i class="material-icons small teal-text icono">grade</i>
        <i class="material-icons small teal-text icono">gradient</i>
        <i class="material-icons small teal-text icono">grain</i>
        <i class="material-icons small teal-text icono">graphic_eq</i>
        <i class="material-icons small teal-text icono">grid_off</i>
        <i class="material-icons small teal-text icono">grid_on</i>
        <i class="material-icons small teal-text icono">group</i>
        <i class="material-icons small teal-text icono">group_add</i>
        <i class="material-icons small teal-text icono">group_work</i>
        <i class="material-icons small teal-text icono">hd</i>
        <i class="material-icons small teal-text icono">hdr_off</i>
        <i class="material-icons small teal-text icono">hdr_on</i>
        <i class="material-icons small teal-text icono">hdr_strong</i>
        <i class="material-icons small teal-text icono">hdr_weak</i>
        <i class="material-icons small teal-text icono">headset</i>
        <i class="material-icons small teal-text icono">headset_mic</i>
        <i class="material-icons small teal-text icono">healing</i>
        <i class="material-icons small teal-text icono">hearing</i>
        <i class="material-icons small teal-text icono">help</i>
        <i class="material-icons small teal-text icono">help_outline</i>
        <i class="material-icons small teal-text icono">high_quality</i>
        <i class="material-icons small teal-text icono">highlight</i>
        <i class="material-icons small teal-text icono">highlight_off</i>
        <i class="material-icons small teal-text icono">history</i>
        <i class="material-icons small teal-text icono">home</i>
        <i class="material-icons small teal-text icono">hot_tub</i>
        <i class="material-icons small teal-text icono">hotel</i>
        <i class="material-icons small teal-text icono">hourglass_empty</i>
        <i class="material-icons small teal-text icono">hourglass_full</i>
        <i class="material-icons small teal-text icono">http</i>
        <i class="material-icons small teal-text icono">https</i>
        <i class="material-icons small teal-text icono">image</i>
        <i class="material-icons small teal-text icono">image_aspect_ratio</i>
        <i class="material-icons small teal-text icono">import_contacts</i>
        <i class="material-icons small teal-text icono">import_export</i>
        <i class="material-icons small teal-text icono">important_devices</i>
        <i class="material-icons small teal-text icono">inbox</i>
        <i class="material-icons small teal-text icono">indeterminate_check_box</i>
        <i class="material-icons small teal-text icono">info</i>
        <i class="material-icons small teal-text icono">info_outline</i>
        <i class="material-icons small teal-text icono">input</i>
        <i class="material-icons small teal-text icono">insert_chart</i>
        <i class="material-icons small teal-text icono">insert_comment</i>
        <i class="material-icons small teal-text icono">insert_drive_file</i>
        <i class="material-icons small teal-text icono">insert_emoticon</i>
        <i class="material-icons small teal-text icono">insert_invitation</i>
        <i class="material-icons small teal-text icono">insert_link</i>
        <i class="material-icons small teal-text icono">insert_photo</i>
        <i class="material-icons small teal-text icono">invert_colors</i>
        <i class="material-icons small teal-text icono">invert_colors_off</i>
        <i class="material-icons small teal-text icono">iso</i>
        <i class="material-icons small teal-text icono">keyboard</i>
        <i class="material-icons small teal-text icono">keyboard_arrow_down</i>
        <i class="material-icons small teal-text icono">keyboard_arrow_left</i>
        <i class="material-icons small teal-text icono">keyboard_arrow_right</i>
        <i class="material-icons small teal-text icono">keyboard_arrow_up</i>
        <i class="material-icons small teal-text icono">keyboard_backspace</i>
        <i class="material-icons small teal-text icono">keyboard_capslock</i>
        <i class="material-icons small teal-text icono">keyboard_hide</i>
        <i class="material-icons small teal-text icono">keyboard_return</i>
        <i class="material-icons small teal-text icono">keyboard_tab</i>
        <i class="material-icons small teal-text icono">keyboard_voice</i>
        <i class="material-icons small teal-text icono">kitchen</i>
        <i class="material-icons small teal-text icono">label</i>
        <i class="material-icons small teal-text icono">label_outline</i>
        <i class="material-icons small teal-text icono">landscape</i>
        <i class="material-icons small teal-text icono">language</i>
        <i class="material-icons small teal-text icono">laptop</i>
        <i class="material-icons small teal-text icono">laptop_chromebook</i>
        <i class="material-icons small teal-text icono">laptop_mac</i>
        <i class="material-icons small teal-text icono">laptop_windows</i>
        <i class="material-icons small teal-text icono">last_page</i>
        <i class="material-icons small teal-text icono">launch</i>
        <i class="material-icons small teal-text icono">layers</i>
        <i class="material-icons small teal-text icono">layers_clear</i>
        <i class="material-icons small teal-text icono">leak_add</i>
        <i class="material-icons small teal-text icono">leak_remove</i>
        <i class="material-icons small teal-text icono">lens</i>
        <i class="material-icons small teal-text icono">library_add</i>
        <i class="material-icons small teal-text icono">library_books</i>
        <i class="material-icons small teal-text icono">library_music</i>
        <i class="material-icons small teal-text icono">lightbulb_outline</i>
        <i class="material-icons small teal-text icono">line_style</i>
        <i class="material-icons small teal-text icono">line_weight</i>
        <i class="material-icons small teal-text icono">linear_scale</i>
        <i class="material-icons small teal-text icono">link</i>
        <i class="material-icons small teal-text icono">linked_camera</i>
        <i class="material-icons small teal-text icono">list</i>
        <i class="material-icons small teal-text icono">live_help</i>
        <i class="material-icons small teal-text icono">live_tv</i>
        <i class="material-icons small teal-text icono">local_activity</i>
        <i class="material-icons small teal-text icono">local_airport</i>
        <i class="material-icons small teal-text icono">local_atm</i>
        <i class="material-icons small teal-text icono">local_bar</i>
        <i class="material-icons small teal-text icono">local_cafe</i>
        <i class="material-icons small teal-text icono">local_car_wash</i>
        <i class="material-icons small teal-text icono">local_convenience_store</i>
        <i class="material-icons small teal-text icono">local_dining</i>
        <i class="material-icons small teal-text icono">local_drink</i>
        <i class="material-icons small teal-text icono">local_florist</i>
        <i class="material-icons small teal-text icono">local_gas_station</i>
        <i class="material-icons small teal-text icono">local_grocery_store</i>
        <i class="material-icons small teal-text icono">local_hospital</i>
        <i class="material-icons small teal-text icono">local_hotel</i>
        <i class="material-icons small teal-text icono">local_laundry_service</i>
        <i class="material-icons small teal-text icono">local_library</i>
        <i class="material-icons small teal-text icono">local_mall</i>
        <i class="material-icons small teal-text icono">local_movies</i>
        <i class="material-icons small teal-text icono">local_offer</i>
        <i class="material-icons small teal-text icono">local_parking</i>
        <i class="material-icons small teal-text icono">local_pharmacy</i>
        <i class="material-icons small teal-text icono">local_phone</i>
        <i class="material-icons small teal-text icono">local_pizza</i>
        <i class="material-icons small teal-text icono">local_play</i>
        <i class="material-icons small teal-text icono">local_post_office</i>
        <i class="material-icons small teal-text icono">local_printshop</i>
        <i class="material-icons small teal-text icono">local_see</i>
        <i class="material-icons small teal-text icono">local_shipping</i>
        <i class="material-icons small teal-text icono">local_taxi</i>
        <i class="material-icons small teal-text icono">location_city</i>
        <i class="material-icons small teal-text icono">location_disabled</i>
        <i class="material-icons small teal-text icono">location_off</i>
        <i class="material-icons small teal-text icono">location_on</i>
        <i class="material-icons small teal-text icono">location_searching</i>
        <i class="material-icons small teal-text icono">lock</i>
        <i class="material-icons small teal-text icono">lock_open</i>
        <i class="material-icons small teal-text icono">lock_outline</i>
        <i class="material-icons small teal-text icono">looks</i>
        <i class="material-icons small teal-text icono">looks_3</i>
        <i class="material-icons small teal-text icono">looks_4</i>
        <i class="material-icons small teal-text icono">looks_5</i>
        <i class="material-icons small teal-text icono">looks_6</i>
        <i class="material-icons small teal-text icono">looks_one</i>
        <i class="material-icons small teal-text icono">looks_two</i>
        <i class="material-icons small teal-text icono">loop</i>
        <i class="material-icons small teal-text icono">loupe</i>
        <i class="material-icons small teal-text icono">low_priority</i>
        <i class="material-icons small teal-text icono">loyalty</i>
        <i class="material-icons small teal-text icono">mail</i>
        <i class="material-icons small teal-text icono">mail_outline</i>
        <i class="material-icons small teal-text icono">map</i>
        <i class="material-icons small teal-text icono">markunread</i>
        <i class="material-icons small teal-text icono">markunread_mailbox</i>
        <i class="material-icons small teal-text icono">memory</i>
        <i class="material-icons small teal-text icono">menu</i>
        <i class="material-icons small teal-text icono">merge_type</i>
        <i class="material-icons small teal-text icono">message</i>
        <i class="material-icons small teal-text icono">mic</i>
        <i class="material-icons small teal-text icono">mic_none</i>
        <i class="material-icons small teal-text icono">mic_off</i>
        <i class="material-icons small teal-text icono">mms</i>
        <i class="material-icons small teal-text icono">mode_comment</i>
        <i class="material-icons small teal-text icono">mode_edit</i>
        <i class="material-icons small teal-text icono">monetization_on</i>
        <i class="material-icons small teal-text icono">money_off</i>
        <i class="material-icons small teal-text icono">monochrome_photos</i>
        <i class="material-icons small teal-text icono">mood</i>
        <i class="material-icons small teal-text icono">mood_bad</i>
        <i class="material-icons small teal-text icono">more</i>
        <i class="material-icons small teal-text icono">more_horiz</i>
        <i class="material-icons small teal-text icono">more_vert</i>
        <i class="material-icons small teal-text icono">motorcycle</i>
        <i class="material-icons small teal-text icono">mouse</i>
        <i class="material-icons small teal-text icono">move_to_inbox</i>
        <i class="material-icons small teal-text icono">movie</i>
        <i class="material-icons small teal-text icono">movie_creation</i>
        <i class="material-icons small teal-text icono">movie_filter</i>
        <i class="material-icons small teal-text icono">multiline_chart</i>
        <i class="material-icons small teal-text icono">music_note</i>
        <i class="material-icons small teal-text icono">music_video</i>
        <i class="material-icons small teal-text icono">my_location</i>
        <i class="material-icons small teal-text icono">nature</i>
        <i class="material-icons small teal-text icono">nature_people</i>
        <i class="material-icons small teal-text icono">navigate_before</i>
        <i class="material-icons small teal-text icono">navigate_next</i>
        <i class="material-icons small teal-text icono">navigation</i>
        <i class="material-icons small teal-text icono">near_me</i>
        <i class="material-icons small teal-text icono">network_cell</i>
        <i class="material-icons small teal-text icono">network_check</i>
        <i class="material-icons small teal-text icono">network_locked</i>
        <i class="material-icons small teal-text icono">network_wifi</i>
        <i class="material-icons small teal-text icono">new_releases</i>
        <i class="material-icons small teal-text icono">next_week</i>
        <i class="material-icons small teal-text icono">nfc</i>
        <i class="material-icons small teal-text icono">no_encryption</i>
        <i class="material-icons small teal-text icono">no_sim</i>
        <i class="material-icons small teal-text icono">not_interested</i>
        <i class="material-icons small teal-text icono">note</i>
        <i class="material-icons small teal-text icono">note_add</i>
        <i class="material-icons small teal-text icono">notifications</i>
        <i class="material-icons small teal-text icono">notifications_active</i>
        <i class="material-icons small teal-text icono">notifications_none</i>
        <i class="material-icons small teal-text icono">notifications_off</i>
        <i class="material-icons small teal-text icono">notifications_paused</i>
        <i class="material-icons small teal-text icono">offline_pin</i>
        <i class="material-icons small teal-text icono">ondemand_video</i>
        <i class="material-icons small teal-text icono">opacity</i>
        <i class="material-icons small teal-text icono">open_in_browser</i>
        <i class="material-icons small teal-text icono">open_in_new</i>
        <i class="material-icons small teal-text icono">open_with</i>
        <i class="material-icons small teal-text icono">pages</i>
        <i class="material-icons small teal-text icono">pageview</i>
        <i class="material-icons small teal-text icono">palette</i>
        <i class="material-icons small teal-text icono">pan_tool</i>
        <i class="material-icons small teal-text icono">panorama</i>
        <i class="material-icons small teal-text icono">panorama_fish_eye</i>
        <i class="material-icons small teal-text icono">panorama_horizontal</i>
        <i class="material-icons small teal-text icono">panorama_vertical</i>
        <i class="material-icons small teal-text icono">panorama_wide_angle</i>
        <i class="material-icons small teal-text icono">party_mode</i>
        <i class="material-icons small teal-text icono">pause</i>
        <i class="material-icons small teal-text icono">pause_circle_filled</i>
        <i class="material-icons small teal-text icono">pause_circle_outline</i>
        <i class="material-icons small teal-text icono">payment</i>
        <i class="material-icons small teal-text icono">people</i>
        <i class="material-icons small teal-text icono">people_outline</i>
        <i class="material-icons small teal-text icono">perm_camera_mic</i>
        <i class="material-icons small teal-text icono">perm_contact_calendar</i>
        <i class="material-icons small teal-text icono">perm_data_setting</i>
        <i class="material-icons small teal-text icono">perm_device_information</i>
        <i class="material-icons small teal-text icono">perm_identity</i>
        <i class="material-icons small teal-text icono">perm_media</i>
        <i class="material-icons small teal-text icono">perm_phone_msg</i>
        <i class="material-icons small teal-text icono">perm_scan_wifi</i>
        <i class="material-icons small teal-text icono">person</i>
        <i class="material-icons small teal-text icono">person_add</i>
        <i class="material-icons small teal-text icono">person_outline</i>
        <i class="material-icons small teal-text icono">person_pin</i>
        <i class="material-icons small teal-text icono">person_pin_circle</i>
        <i class="material-icons small teal-text icono">personal_video</i>
        <i class="material-icons small teal-text icono">pets</i>
        <i class="material-icons small teal-text icono">phone</i>
        <i class="material-icons small teal-text icono">phone_android</i>
        <i class="material-icons small teal-text icono">phone_bluetooth_speaker</i>
        <i class="material-icons small teal-text icono">phone_forwarded</i>
        <i class="material-icons small teal-text icono">phone_in_talk</i>
        <i class="material-icons small teal-text icono">phone_iphone</i>
        <i class="material-icons small teal-text icono">phone_locked</i>
        <i class="material-icons small teal-text icono">phone_missed</i>
        <i class="material-icons small teal-text icono">phone_paused</i>
        <i class="material-icons small teal-text icono">phonelink</i>
        <i class="material-icons small teal-text icono">phonelink_erase</i>
        <i class="material-icons small teal-text icono">phonelink_lock</i>
        <i class="material-icons small teal-text icono">phonelink_off</i>
        <i class="material-icons small teal-text icono">phonelink_ring</i>
        <i class="material-icons small teal-text icono">phonelink_setup</i>
        <i class="material-icons small teal-text icono">photo</i>
        <i class="material-icons small teal-text icono">photo_album</i>
        <i class="material-icons small teal-text icono">photo_camera</i>
        <i class="material-icons small teal-text icono">photo_filter</i>
        <i class="material-icons small teal-text icono">photo_library</i>
        <i class="material-icons small teal-text icono">photo_size_select_actual</i>
        <i class="material-icons small teal-text icono">photo_size_select_large</i>
        <i class="material-icons small teal-text icono">photo_size_select_small</i>
        <i class="material-icons small teal-text icono">picture_as_pdf</i>
        <i class="material-icons small teal-text icono">picture_in_picture</i>
        <i class="material-icons small teal-text icono">picture_in_picture_alt</i>
        <i class="material-icons small teal-text icono">pie_chart</i>
        <i class="material-icons small teal-text icono">pie_chart_outlined</i>
        <i class="material-icons small teal-text icono">pin_drop</i>
        <i class="material-icons small teal-text icono">place</i>
        <i class="material-icons small teal-text icono">play_arrow</i>
        <i class="material-icons small teal-text icono">play_circle_filled</i>
        <i class="material-icons small teal-text icono">play_circle_outline</i>
        <i class="material-icons small teal-text icono">play_for_work</i>
        <i class="material-icons small teal-text icono">playlist_add</i>
        <i class="material-icons small teal-text icono">playlist_add_check</i>
        <i class="material-icons small teal-text icono">playlist_play</i>
        <i class="material-icons small teal-text icono">plus_one</i>
        <i class="material-icons small teal-text icono">poll</i>
        <i class="material-icons small teal-text icono">polymer</i>
        <i class="material-icons small teal-text icono">pool</i>
        <i class="material-icons small teal-text icono">portable_wifi_off</i>
        <i class="material-icons small teal-text icono">portrait</i>
        <i class="material-icons small teal-text icono">power</i>
        <i class="material-icons small teal-text icono">power_input</i>
        <i class="material-icons small teal-text icono">power_settings_new</i>
        <i class="material-icons small teal-text icono">pregnant_woman</i>
        <i class="material-icons small teal-text icono">present_to_all</i>
        <i class="material-icons small teal-text icono">print</i>
        <i class="material-icons small teal-text icono">priority_high</i>
        <i class="material-icons small teal-text icono">public</i>
        <i class="material-icons small teal-text icono">publish</i>
        <i class="material-icons small teal-text icono">query_builder</i>
        <i class="material-icons small teal-text icono">question_answer</i>
        <i class="material-icons small teal-text icono">queue</i>
        <i class="material-icons small teal-text icono">queue_music</i>
        <i class="material-icons small teal-text icono">queue_play_next</i>
        <i class="material-icons small teal-text icono">radio</i>
        <i class="material-icons small teal-text icono">radio_button_checked</i>
        <i class="material-icons small teal-text icono">radio_button_unchecked</i>
        <i class="material-icons small teal-text icono">rate_review</i>
        <i class="material-icons small teal-text icono">receipt</i>
        <i class="material-icons small teal-text icono">recent_actors</i>
        <i class="material-icons small teal-text icono">record_voice_over</i>
        <i class="material-icons small teal-text icono">redeem</i>
        <i class="material-icons small teal-text icono">redo</i>
        <i class="material-icons small teal-text icono">refresh</i>
        <i class="material-icons small teal-text icono">remove</i>
        <i class="material-icons small teal-text icono">remove_circle</i>
        <i class="material-icons small teal-text icono">remove_circle_outline</i>
        <i class="material-icons small teal-text icono">remove_from_queue</i>
        <i class="material-icons small teal-text icono">remove_red_eye</i>
        <i class="material-icons small teal-text icono">remove_shopping_cart</i>
        <i class="material-icons small teal-text icono">reorder</i>
        <i class="material-icons small teal-text icono">repeat</i>
        <i class="material-icons small teal-text icono">repeat_one</i>
        <i class="material-icons small teal-text icono">replay</i>
        <i class="material-icons small teal-text icono">replay_10</i>
        <i class="material-icons small teal-text icono">replay_30</i>
        <i class="material-icons small teal-text icono">replay_5</i>
        <i class="material-icons small teal-text icono">reply</i>
        <i class="material-icons small teal-text icono">reply_all</i>
        <i class="material-icons small teal-text icono">report</i>
        <i class="material-icons small teal-text icono">report_problem</i>
        <i class="material-icons small teal-text icono">restaurant</i>
        <i class="material-icons small teal-text icono">restaurant_menu</i>
        <i class="material-icons small teal-text icono">restore</i>
        <i class="material-icons small teal-text icono">restore_page</i>
        <i class="material-icons small teal-text icono">ring_volume</i>
        <i class="material-icons small teal-text icono">room</i>
        <i class="material-icons small teal-text icono">room_service</i>
        <i class="material-icons small teal-text icono">rotate_90_degrees_ccw</i>
        <i class="material-icons small teal-text icono">rotate_left</i>
        <i class="material-icons small teal-text icono">rotate_right</i>
        <i class="material-icons small teal-text icono">rounded_corner</i>
        <i class="material-icons small teal-text icono">router</i>
        <i class="material-icons small teal-text icono">rowing</i>
        <i class="material-icons small teal-text icono">rss_feed</i>
        <i class="material-icons small teal-text icono">rv_hookup</i>
        <i class="material-icons small teal-text icono">satellite</i>
        <i class="material-icons small teal-text icono">save</i>
        <i class="material-icons small teal-text icono">scanner</i>
        <i class="material-icons small teal-text icono">schedule</i>
        <i class="material-icons small teal-text icono">school</i>
        <i class="material-icons small teal-text icono">screen_lock_landscape</i>
        <i class="material-icons small teal-text icono">screen_lock_portrait</i>
        <i class="material-icons small teal-text icono">screen_lock_rotation</i>
        <i class="material-icons small teal-text icono">screen_rotation</i>
        <i class="material-icons small teal-text icono">screen_share</i>
        <i class="material-icons small teal-text icono">sd_card</i>
        <i class="material-icons small teal-text icono">sd_storage</i>
        <i class="material-icons small teal-text icono">search</i>
        <i class="material-icons small teal-text icono">security</i>
        <i class="material-icons small teal-text icono">select_all</i>
        <i class="material-icons small teal-text icono">send</i>
        <i class="material-icons small teal-text icono">sentiment_dissatisfied</i>
        <i class="material-icons small teal-text icono">sentiment_neutral</i>
        <i class="material-icons small teal-text icono">sentiment_satisfied</i>
        <i class="material-icons small teal-text icono">sentiment_very_dissatisfied</i>
        <i class="material-icons small teal-text icono">sentiment_very_satisfied</i>
        <i class="material-icons small teal-text icono">settings</i>
        <i class="material-icons small teal-text icono">settings_applications</i>
        <i class="material-icons small teal-text icono">settings_backup_restore</i>
        <i class="material-icons small teal-text icono">settings_bluetooth</i>
        <i class="material-icons small teal-text icono">settings_brightness</i>
        <i class="material-icons small teal-text icono">settings_cell</i>
        <i class="material-icons small teal-text icono">settings_ethernet</i>
        <i class="material-icons small teal-text icono">settings_input_antenna</i>
        <i class="material-icons small teal-text icono">settings_input_component</i>
        <i class="material-icons small teal-text icono">settings_input_composite</i>
        <i class="material-icons small teal-text icono">settings_input_hdmi</i>
        <i class="material-icons small teal-text icono">settings_input_svideo</i>
        <i class="material-icons small teal-text icono">settings_overscan</i>
        <i class="material-icons small teal-text icono">settings_phone</i>
        <i class="material-icons small teal-text icono">settings_power</i>
        <i class="material-icons small teal-text icono">settings_remote</i>
        <i class="material-icons small teal-text icono">settings_system_daydream</i>
        <i class="material-icons small teal-text icono">settings_voice</i>
        <i class="material-icons small teal-text icono">share</i>
        <i class="material-icons small teal-text icono">shop</i>
        <i class="material-icons small teal-text icono">shop_two</i>
        <i class="material-icons small teal-text icono">shopping_basket</i>
        <i class="material-icons small teal-text icono">shopping_cart</i>
        <i class="material-icons small teal-text icono">short_text</i>
        <i class="material-icons small teal-text icono">show_chart</i>
        <i class="material-icons small teal-text icono">shuffle</i>
        <i class="material-icons small teal-text icono">signal_cellular_4_bar</i>
        <i class="material-icons small teal-text icono">signal_cellular_connected_no_internet_4_bar</i>
        <i class="material-icons small teal-text icono">signal_cellular_no_sim</i>
        <i class="material-icons small teal-text icono">signal_cellular_null</i>
        <i class="material-icons small teal-text icono">signal_cellular_off</i>
        <i class="material-icons small teal-text icono">signal_wifi_4_bar</i>
        <i class="material-icons small teal-text icono">signal_wifi_4_bar_lock</i>
        <i class="material-icons small teal-text icono">signal_wifi_off</i>
        <i class="material-icons small teal-text icono">sim_card</i>
        <i class="material-icons small teal-text icono">sim_card_alert</i>
        <i class="material-icons small teal-text icono">skip_next</i>
        <i class="material-icons small teal-text icono">skip_previous</i>
        <i class="material-icons small teal-text icono">slideshow</i>
        <i class="material-icons small teal-text icono">slow_motion_video</i>
        <i class="material-icons small teal-text icono">smartphone</i>
        <i class="material-icons small teal-text icono">smoke_free</i>
        <i class="material-icons small teal-text icono">smoking_rooms</i>
        <i class="material-icons small teal-text icono">sms</i>
        <i class="material-icons small teal-text icono">sms_failed</i>
        <i class="material-icons small teal-text icono">snooze</i>
        <i class="material-icons small teal-text icono">sort</i>
        <i class="material-icons small teal-text icono">sort_by_alpha</i>
        <i class="material-icons small teal-text icono">spa</i>
        <i class="material-icons small teal-text icono">space_bar</i>
        <i class="material-icons small teal-text icono">speaker</i>
        <i class="material-icons small teal-text icono">speaker_group</i>
        <i class="material-icons small teal-text icono">speaker_notes</i>
        <i class="material-icons small teal-text icono">speaker_notes_off</i>
        <i class="material-icons small teal-text icono">speaker_phone</i>
        <i class="material-icons small teal-text icono">spellcheck</i>
        <i class="material-icons small teal-text icono">star</i>
        <i class="material-icons small teal-text icono">star_border</i>
        <i class="material-icons small teal-text icono">star_half</i>
        <i class="material-icons small teal-text icono">stars</i>
        <i class="material-icons small teal-text icono">stay_current_landscape</i>
        <i class="material-icons small teal-text icono">stay_current_portrait</i>
        <i class="material-icons small teal-text icono">stay_primary_landscape</i>
        <i class="material-icons small teal-text icono">stay_primary_portrait</i>
        <i class="material-icons small teal-text icono">stop</i>
        <i class="material-icons small teal-text icono">stop_screen_share</i>
        <i class="material-icons small teal-text icono">storage</i>
        <i class="material-icons small teal-text icono">store</i>
        <i class="material-icons small teal-text icono">store_mall_directory</i>
        <i class="material-icons small teal-text icono">straighten</i>
        <i class="material-icons small teal-text icono">streetview</i>
        <i class="material-icons small teal-text icono">strikethrough_s</i>
        <i class="material-icons small teal-text icono">style</i>
        <i class="material-icons small teal-text icono">subdirectory_arrow_left</i>
        <i class="material-icons small teal-text icono">subdirectory_arrow_right</i>
        <i class="material-icons small teal-text icono">subject</i>
        <i class="material-icons small teal-text icono">subscriptions</i>
        <i class="material-icons small teal-text icono">subtitles</i>
        <i class="material-icons small teal-text icono">subway</i>
        <i class="material-icons small teal-text icono">supervisor_account</i>
        <i class="material-icons small teal-text icono">surround_sound</i>
        <i class="material-icons small teal-text icono">swap_calls</i>
        <i class="material-icons small teal-text icono">swap_horiz</i>
        <i class="material-icons small teal-text icono">swap_vert</i>
        <i class="material-icons small teal-text icono">swap_vertical_circle</i>
        <i class="material-icons small teal-text icono">switch_camera</i>
        <i class="material-icons small teal-text icono">switch_video</i>
        <i class="material-icons small teal-text icono">sync</i>
        <i class="material-icons small teal-text icono">sync_disabled</i>
        <i class="material-icons small teal-text icono">sync_problem</i>
        <i class="material-icons small teal-text icono">system_update</i>
        <i class="material-icons small teal-text icono">system_update_alt</i>
        <i class="material-icons small teal-text icono">tab</i>
        <i class="material-icons small teal-text icono">tab_unselected</i>
        <i class="material-icons small teal-text icono">tablet</i>
        <i class="material-icons small teal-text icono">tablet_android</i>
        <i class="material-icons small teal-text icono">tablet_mac</i>
        <i class="material-icons small teal-text icono">tag_faces</i>
        <i class="material-icons small teal-text icono">tap_and_play</i>
        <i class="material-icons small teal-text icono">terrain</i>
        <i class="material-icons small teal-text icono">text_fields</i>
        <i class="material-icons small teal-text icono">text_format</i>
        <i class="material-icons small teal-text icono">textsms</i>
        <i class="material-icons small teal-text icono">texture</i>
        <i class="material-icons small teal-text icono">theaters</i>
        <i class="material-icons small teal-text icono">thumb_down</i>
        <i class="material-icons small teal-text icono">thumb_up</i>
        <i class="material-icons small teal-text icono">thumbs_up_down</i>
        <i class="material-icons small teal-text icono">time_to_leave</i>
        <i class="material-icons small teal-text icono">timelapse</i>
        <i class="material-icons small teal-text icono">timeline</i>
        <i class="material-icons small teal-text icono">timer</i>
        <i class="material-icons small teal-text icono">timer_10</i>
        <i class="material-icons small teal-text icono">timer_3</i>
        <i class="material-icons small teal-text icono">timer_off</i>
        <i class="material-icons small teal-text icono">title</i>
        <i class="material-icons small teal-text icono">toc</i>
        <i class="material-icons small teal-text icono">today</i>
        <i class="material-icons small teal-text icono">toll</i>
        <i class="material-icons small teal-text icono">tonality</i>
        <i class="material-icons small teal-text icono">touch_app</i>
        <i class="material-icons small teal-text icono">toys</i>
        <i class="material-icons small teal-text icono">track_changes</i>
        <i class="material-icons small teal-text icono">traffic</i>
        <i class="material-icons small teal-text icono">train</i>
        <i class="material-icons small teal-text icono">tram</i>
        <i class="material-icons small teal-text icono">transfer_within_a_station</i>
        <i class="material-icons small teal-text icono">transform</i>
        <i class="material-icons small teal-text icono">translate</i>
        <i class="material-icons small teal-text icono">trending_down</i>
        <i class="material-icons small teal-text icono">trending_flat</i>
        <i class="material-icons small teal-text icono">trending_up</i>
        <i class="material-icons small teal-text icono">tune</i>
        <i class="material-icons small teal-text icono">turned_in</i>
        <i class="material-icons small teal-text icono">turned_in_not</i>
        <i class="material-icons small teal-text icono">tv</i>
        <i class="material-icons small teal-text icono">unarchive</i>
        <i class="material-icons small teal-text icono">undo</i>
        <i class="material-icons small teal-text icono">unfold_less</i>
        <i class="material-icons small teal-text icono">unfold_more</i>
        <i class="material-icons small teal-text icono">update</i>
        <i class="material-icons small teal-text icono">usb</i>
        <i class="material-icons small teal-text icono">verified_user</i>
        <i class="material-icons small teal-text icono">vertical_align_bottom</i>
        <i class="material-icons small teal-text icono">vertical_align_center</i>
        <i class="material-icons small teal-text icono">vertical_align_top</i>
        <i class="material-icons small teal-text icono">vibration</i>
        <i class="material-icons small teal-text icono">video_call</i>
        <i class="material-icons small teal-text icono">video_label</i>
        <i class="material-icons small teal-text icono">video_library</i>
        <i class="material-icons small teal-text icono">videocam</i>
        <i class="material-icons small teal-text icono">videocam_off</i>
        <i class="material-icons small teal-text icono">videogame_asset</i>
        <i class="material-icons small teal-text icono">view_agenda</i>
        <i class="material-icons small teal-text icono">view_array</i>
        <i class="material-icons small teal-text icono">view_carousel</i>
        <i class="material-icons small teal-text icono">view_column</i>
        <i class="material-icons small teal-text icono">view_comfy</i>
        <i class="material-icons small teal-text icono">view_compact</i>
        <i class="material-icons small teal-text icono">view_day</i>
        <i class="material-icons small teal-text icono">view_headline</i>
        <i class="material-icons small teal-text icono">view_list</i>
        <i class="material-icons small teal-text icono">view_module</i>
        <i class="material-icons small teal-text icono">view_quilt</i>
        <i class="material-icons small teal-text icono">view_stream</i>
        <i class="material-icons small teal-text icono">view_week</i>
        <i class="material-icons small teal-text icono">vignette</i>
        <i class="material-icons small teal-text icono">visibility</i>
        <i class="material-icons small teal-text icono">visibility_off</i>
        <i class="material-icons small teal-text icono">voice_chat</i>
        <i class="material-icons small teal-text icono">voicemail</i>
        <i class="material-icons small teal-text icono">volume_down</i>
        <i class="material-icons small teal-text icono">volume_mute</i>
        <i class="material-icons small teal-text icono">volume_off</i>
        <i class="material-icons small teal-text icono">volume_up</i>
        <i class="material-icons small teal-text icono">vpn_key</i>
        <i class="material-icons small teal-text icono">vpn_lock</i>
        <i class="material-icons small teal-text icono">wallpaper</i>
        <i class="material-icons small teal-text icono">warning</i>
        <i class="material-icons small teal-text icono">watch</i>
        <i class="material-icons small teal-text icono">watch_later</i>
        <i class="material-icons small teal-text icono">wb_auto</i>
        <i class="material-icons small teal-text icono">wb_cloudy</i>
        <i class="material-icons small teal-text icono">wb_incandescent</i>
        <i class="material-icons small teal-text icono">wb_iridescent</i>
        <i class="material-icons small teal-text icono">wb_sunny</i>
        <i class="material-icons small teal-text icono">wc</i>
        <i class="material-icons small teal-text icono">web</i>
        <i class="material-icons small teal-text icono">web_asset</i>
        <i class="material-icons small teal-text icono">weekend</i>
        <i class="material-icons small teal-text icono">whatshot</i>
        <i class="material-icons small teal-text icono">widgets</i>
        <i class="material-icons small teal-text icono">wifi</i>
        <i class="material-icons small teal-text icono">wifi_lock</i>
        <i class="material-icons small teal-text icono">wifi_tethering</i>
        <i class="material-icons small teal-text icono">work</i>
        <i class="material-icons small teal-text icono">wrap_text</i>
        <i class="material-icons small teal-text icono">youtube_searched_for</i>
        <i class="material-icons small teal-text icono">zoom_in</i>
        <i class="material-icons small teal-text icono">zoom_out</i>
        <i class="material-icons small teal-text icono">zoom_out_map</i>
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
      <a href="#" class="modal-close waves-effect waves-light grey lighten-1 btn">Cancelar</a>
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
    if (url.indexOf('editCategory') > 0){ //editar categoria
      $('#modalCategoria').modal({ 'preventScrolling': true, 'onCloseEnd': redireccionar });
      $('#modalCategoria').modal('open');
    }else{ // crear categoria
      $('.modal').modal();
    }
    $('.botonesBorrar').click(function(){
      var id = this.name;
      $('#buttonDelete').prop({
        href: '<?php echo RUTA_URL?>/admin/deleteCategory/'+id
      });
    });

		$(".icono").mouseenter(function(){
			$(this).addClass("grey-text");
			$(this).removeClass("teal-text");
		});
		$(".icono").mouseleave(function(){
			$(this).removeClass("grey-text");
			$(this).addClass("teal-text");
		});
		$(".icono").click(function(){
			$(".icono").each(function(i){
		    $(this).removeClass("black-text");
		    $(this).addClass("teal-text");    
		  });
		  $(this).removeClass("grey-text");
		  $(this).removeClass("teal-text");
			$(this).addClass("black-text");
			$("#icono").val($(this).text());
			// var icono_anterior = $("#span_icono").attr('class');
			// $("#span_icono").removeClass(icono_anterior);
			// $("#span_icono").addClass(icono);
			// $("#span_icono").removeClass("black-text");
			// $("#text_icono_seleccionado").val($("#span_icono").attr("class"));
			// if (icono=="black-text"){
			// 	$("#span_icono").addClass("flaticon-add");
			// 	$("#text_icono_seleccionado").val(null);
			// }
		});
  });
</script>