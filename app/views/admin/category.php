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
    <p>
      <?php if($edit){ ?>
        <h4>Modificar categoría</h4>
        <form action="<?php echo RUTA_URL.'/admin/editCategory/'.$data['dataEditCategoria']['id_categoria']; ?>" method="post">
      <?php }else{ ?>
        <h4>Crear nueva categoría</h4>
        <form action="<?php echo RUTA_URL?>/admin/insertCategory" method="post">
      <?php } ?>
      <div class="row">
        <div class="col s12 input-field">
          <?php if($edit){ ?>
            <input value="<?php echo $data['dataEditCategoria']['category_titulo']; ?>" name="titulo" id="titulo" type="text" required>
          <?php }else{ ?>
            <input name="titulo" id="titulo" type="text" required>
          <?php } ?>
          <label for="titulo">Título</label>
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
          <i class="material-icons small teal-text" style="paddin: 1rem;">3d_rotation</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">ac_unit</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">access_alarm</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">access_alarms</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">access_time</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">accessibility</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">accessible</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">account_balance</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">account_balance_wallet</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">account_box</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">account_circle</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">adb</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">add</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">add_a_photo</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">add_alarm</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">add_alert</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">add_box</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">add_circle</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">add_circle_outline</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">add_location</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">add_shopping_cart</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">add_to_photos</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">add_to_queue</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">adjust</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">airline_seat_flat</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">airline_seat_flat_angled</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">airline_seat_individual_suite</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">airline_seat_legroom_extra</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">airline_seat_legroom_normal</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">airline_seat_legroom_reduced</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">airline_seat_recline_extra</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">airline_seat_recline_normal</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">airplanemode_active</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">airplanemode_inactive</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">airplay</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">airport_shuttle</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">alarm</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">alarm_add</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">alarm_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">alarm_on</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">album</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">all_inclusive</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">all_out</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">android</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">announcement</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">apps</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">archive</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">arrow_back</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">arrow_downward</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">arrow_drop_down</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">arrow_drop_down_circle</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">arrow_drop_up</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">arrow_forward</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">arrow_upward</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">art_track</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">aspect_ratio</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">assessment</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">assignment</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">assignment_ind</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">assignment_late</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">assignment_return</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">assignment_returned</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">assignment_turned_in</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">assistant</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">assistant_photo</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">attach_file</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">attach_money</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">attachment</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">audiotrack</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">autorenew</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">av_timer</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">backspace</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">backup</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">battery_alert</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">battery_charging_full</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">battery_full</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">battery_std</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">battery_unknown</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">beach_access</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">beenhere</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">block</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">bluetooth</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">bluetooth_audio</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">bluetooth_connected</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">bluetooth_disabled</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">bluetooth_searching</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">blur_circular</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">blur_linear</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">blur_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">blur_on</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">book</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">bookmark</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">bookmark_border</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">border_all</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">border_bottom</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">border_clear</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">border_color</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">border_horizontal</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">border_inner</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">border_left</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">border_outer</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">border_right</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">border_style</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">border_top</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">border_vertical</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">branding_watermark</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">brightness_1</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">brightness_2</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">brightness_3</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">brightness_4</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">brightness_5</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">brightness_6</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">brightness_7</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">brightness_auto</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">brightness_high</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">brightness_low</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">brightness_medium</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">broken_image</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">brush</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">bubble_chart</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">bug_report</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">build</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">burst_mode</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">business</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">business_center</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">cached</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">cake</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">call</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">call_end</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">call_made</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">call_merge</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">call_missed</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">call_missed_outgoing</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">call_received</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">call_split</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">call_to_action</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">camera</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">camera_alt</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">camera_enhance</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">camera_front</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">camera_rear</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">camera_roll</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">cancel</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">card_giftcard</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">card_membership</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">card_travel</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">casino</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">cast</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">cast_connected</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">center_focus_strong</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">center_focus_weak</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">change_history</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">chat</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">chat_bubble</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">chat_bubble_outline</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">check</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">check_box</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">check_box_outline_blank</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">check_circle</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">chevron_left</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">chevron_right</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">child_care</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">child_friendly</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">chrome_reader_mode</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">class</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">clear</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">clear_all</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">close</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">closed_caption</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">cloud</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">cloud_circle</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">cloud_done</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">cloud_download</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">cloud_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">cloud_queue</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">cloud_upload</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">code</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">collections</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">collections_bookmark</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">color_lens</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">colorize</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">comment</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">compare</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">compare_arrows</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">computer</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">confirmation_number</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">contact_mail</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">contact_phone</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">contacts</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">content_copy</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">content_cut</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">content_paste</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">control_point</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">control_point_duplicate</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">copyright</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">create</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">create_new_folder</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">credit_card</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">crop</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">crop_16_9</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">crop_3_2</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">crop_5_4</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">crop_7_5</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">crop_din</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">crop_free</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">crop_landscape</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">crop_original</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">crop_portrait</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">crop_rotate</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">crop_square</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">dashboard</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">data_usage</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">date_range</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">dehaze</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">delete</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">delete_forever</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">delete_sweep</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">description</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">desktop_mac</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">desktop_windows</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">details</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">developer_board</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">developer_mode</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">device_hub</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">devices</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">devices_other</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">dialer_sip</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">dialpad</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">directions</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">directions_bike</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">directions_boat</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">directions_bus</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">directions_car</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">directions_railway</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">directions_run</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">directions_subway</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">directions_transit</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">directions_walk</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">disc_full</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">dns</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">do_not_disturb</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">do_not_disturb_alt</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">do_not_disturb_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">do_not_disturb_on</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">dock</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">domain</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">done</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">done_all</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">donut_large</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">donut_small</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">drafts</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">drag_handle</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">drive_eta</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">dvr</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">edit</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">edit_location</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">eject</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">email</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">enhanced_encryption</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">equalizer</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">error</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">error_outline</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">euro_symbol</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">ev_station</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">event</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">event_available</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">event_busy</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">event_note</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">event_seat</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">exit_to_app</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">expand_less</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">expand_more</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">explicit</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">explore</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">exposure</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">exposure_neg_1</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">exposure_neg_2</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">exposure_plus_1</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">exposure_plus_2</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">exposure_zero</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">extension</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">face</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">fast_forward</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">fast_rewind</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">favorite</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">favorite_border</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">featured_play_list</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">featured_video</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">feedback</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">fiber_dvr</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">fiber_manual_record</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">fiber_new</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">fiber_pin</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">fiber_smart_record</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">file_download</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">file_upload</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">filter</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">filter_1</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">filter_2</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">filter_3</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">filter_4</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">filter_5</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">filter_6</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">filter_7</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">filter_8</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">filter_9</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">filter_9_plus</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">filter_b_and_w</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">filter_center_focus</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">filter_drama</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">filter_frames</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">filter_hdr</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">filter_list</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">filter_none</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">filter_tilt_shift</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">filter_vintage</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">find_in_page</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">find_replace</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">fingerprint</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">first_page</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">fitness_center</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">flag</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">flare</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">flash_auto</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">flash_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">flash_on</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">flight</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">flight_land</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">flight_takeoff</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">flip</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">flip_to_back</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">flip_to_front</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">folder</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">folder_open</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">folder_shared</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">folder_special</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">font_download</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_align_center</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_align_justify</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_align_left</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_align_right</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_bold</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_clear</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_color_fill</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_color_reset</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_color_text</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_indent_decrease</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_indent_increase</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_italic</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_line_spacing</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_list_bulleted</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_list_numbered</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_paint</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_quote</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_shapes</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_size</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_strikethrough</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_textdirection_l_to_r</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_textdirection_r_to_l</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">format_underlined</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">forum</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">forward</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">forward_10</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">forward_30</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">forward_5</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">free_breakfast</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">fullscreen</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">fullscreen_exit</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">functions</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">g_translate</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">gamepad</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">games</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">gavel</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">gesture</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">get_app</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">gif</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">golf_course</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">gps_fixed</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">gps_not_fixed</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">gps_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">grade</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">gradient</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">grain</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">graphic_eq</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">grid_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">grid_on</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">group</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">group_add</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">group_work</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">hd</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">hdr_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">hdr_on</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">hdr_strong</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">hdr_weak</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">headset</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">headset_mic</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">healing</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">hearing</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">help</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">help_outline</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">high_quality</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">highlight</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">highlight_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">history</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">home</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">hot_tub</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">hotel</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">hourglass_empty</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">hourglass_full</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">http</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">https</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">image</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">image_aspect_ratio</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">import_contacts</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">import_export</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">important_devices</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">inbox</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">indeterminate_check_box</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">info</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">info_outline</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">input</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">insert_chart</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">insert_comment</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">insert_drive_file</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">insert_emoticon</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">insert_invitation</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">insert_link</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">insert_photo</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">invert_colors</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">invert_colors_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">iso</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">keyboard</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">keyboard_arrow_down</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">keyboard_arrow_left</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">keyboard_arrow_right</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">keyboard_arrow_up</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">keyboard_backspace</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">keyboard_capslock</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">keyboard_hide</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">keyboard_return</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">keyboard_tab</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">keyboard_voice</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">kitchen</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">label</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">label_outline</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">landscape</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">language</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">laptop</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">laptop_chromebook</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">laptop_mac</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">laptop_windows</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">last_page</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">launch</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">layers</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">layers_clear</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">leak_add</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">leak_remove</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">lens</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">library_add</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">library_books</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">library_music</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">lightbulb_outline</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">line_style</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">line_weight</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">linear_scale</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">link</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">linked_camera</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">list</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">live_help</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">live_tv</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_activity</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_airport</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_atm</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_bar</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_cafe</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_car_wash</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_convenience_store</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_dining</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_drink</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_florist</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_gas_station</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_grocery_store</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_hospital</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_hotel</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_laundry_service</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_library</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_mall</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_movies</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_offer</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_parking</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_pharmacy</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_phone</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_pizza</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_play</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_post_office</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_printshop</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_see</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_shipping</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">local_taxi</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">location_city</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">location_disabled</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">location_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">location_on</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">location_searching</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">lock</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">lock_open</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">lock_outline</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">looks</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">looks_3</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">looks_4</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">looks_5</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">looks_6</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">looks_one</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">looks_two</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">loop</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">loupe</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">low_priority</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">loyalty</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">mail</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">mail_outline</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">map</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">markunread</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">markunread_mailbox</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">memory</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">menu</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">merge_type</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">message</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">mic</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">mic_none</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">mic_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">mms</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">mode_comment</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">mode_edit</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">monetization_on</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">money_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">monochrome_photos</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">mood</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">mood_bad</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">more</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">more_horiz</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">more_vert</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">motorcycle</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">mouse</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">move_to_inbox</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">movie</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">movie_creation</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">movie_filter</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">multiline_chart</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">music_note</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">music_video</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">my_location</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">nature</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">nature_people</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">navigate_before</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">navigate_next</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">navigation</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">near_me</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">network_cell</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">network_check</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">network_locked</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">network_wifi</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">new_releases</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">next_week</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">nfc</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">no_encryption</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">no_sim</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">not_interested</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">note</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">note_add</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">notifications</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">notifications_active</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">notifications_none</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">notifications_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">notifications_paused</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">offline_pin</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">ondemand_video</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">opacity</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">open_in_browser</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">open_in_new</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">open_with</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">pages</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">pageview</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">palette</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">pan_tool</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">panorama</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">panorama_fish_eye</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">panorama_horizontal</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">panorama_vertical</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">panorama_wide_angle</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">party_mode</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">pause</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">pause_circle_filled</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">pause_circle_outline</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">payment</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">people</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">people_outline</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">perm_camera_mic</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">perm_contact_calendar</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">perm_data_setting</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">perm_device_information</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">perm_identity</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">perm_media</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">perm_phone_msg</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">perm_scan_wifi</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">person</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">person_add</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">person_outline</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">person_pin</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">person_pin_circle</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">personal_video</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">pets</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">phone</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">phone_android</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">phone_bluetooth_speaker</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">phone_forwarded</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">phone_in_talk</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">phone_iphone</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">phone_locked</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">phone_missed</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">phone_paused</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">phonelink</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">phonelink_erase</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">phonelink_lock</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">phonelink_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">phonelink_ring</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">phonelink_setup</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">photo</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">photo_album</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">photo_camera</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">photo_filter</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">photo_library</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">photo_size_select_actual</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">photo_size_select_large</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">photo_size_select_small</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">picture_as_pdf</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">picture_in_picture</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">picture_in_picture_alt</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">pie_chart</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">pie_chart_outlined</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">pin_drop</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">place</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">play_arrow</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">play_circle_filled</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">play_circle_outline</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">play_for_work</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">playlist_add</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">playlist_add_check</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">playlist_play</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">plus_one</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">poll</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">polymer</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">pool</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">portable_wifi_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">portrait</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">power</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">power_input</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">power_settings_new</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">pregnant_woman</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">present_to_all</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">print</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">priority_high</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">public</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">publish</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">query_builder</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">question_answer</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">queue</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">queue_music</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">queue_play_next</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">radio</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">radio_button_checked</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">radio_button_unchecked</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">rate_review</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">receipt</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">recent_actors</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">record_voice_over</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">redeem</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">redo</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">refresh</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">remove</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">remove_circle</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">remove_circle_outline</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">remove_from_queue</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">remove_red_eye</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">remove_shopping_cart</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">reorder</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">repeat</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">repeat_one</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">replay</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">replay_10</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">replay_30</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">replay_5</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">reply</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">reply_all</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">report</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">report_problem</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">restaurant</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">restaurant_menu</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">restore</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">restore_page</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">ring_volume</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">room</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">room_service</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">rotate_90_degrees_ccw</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">rotate_left</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">rotate_right</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">rounded_corner</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">router</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">rowing</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">rss_feed</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">rv_hookup</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">satellite</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">save</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">scanner</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">schedule</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">school</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">screen_lock_landscape</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">screen_lock_portrait</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">screen_lock_rotation</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">screen_rotation</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">screen_share</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">sd_card</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">sd_storage</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">search</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">security</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">select_all</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">send</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">sentiment_dissatisfied</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">sentiment_neutral</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">sentiment_satisfied</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">sentiment_very_dissatisfied</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">sentiment_very_satisfied</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">settings</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">settings_applications</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">settings_backup_restore</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">settings_bluetooth</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">settings_brightness</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">settings_cell</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">settings_ethernet</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">settings_input_antenna</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">settings_input_component</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">settings_input_composite</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">settings_input_hdmi</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">settings_input_svideo</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">settings_overscan</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">settings_phone</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">settings_power</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">settings_remote</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">settings_system_daydream</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">settings_voice</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">share</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">shop</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">shop_two</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">shopping_basket</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">shopping_cart</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">short_text</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">show_chart</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">shuffle</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">signal_cellular_4_bar</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">signal_cellular_connected_no_internet_4_bar</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">signal_cellular_no_sim</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">signal_cellular_null</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">signal_cellular_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">signal_wifi_4_bar</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">signal_wifi_4_bar_lock</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">signal_wifi_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">sim_card</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">sim_card_alert</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">skip_next</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">skip_previous</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">slideshow</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">slow_motion_video</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">smartphone</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">smoke_free</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">smoking_rooms</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">sms</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">sms_failed</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">snooze</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">sort</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">sort_by_alpha</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">spa</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">space_bar</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">speaker</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">speaker_group</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">speaker_notes</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">speaker_notes_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">speaker_phone</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">spellcheck</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">star</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">star_border</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">star_half</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">stars</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">stay_current_landscape</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">stay_current_portrait</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">stay_primary_landscape</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">stay_primary_portrait</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">stop</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">stop_screen_share</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">storage</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">store</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">store_mall_directory</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">straighten</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">streetview</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">strikethrough_s</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">style</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">subdirectory_arrow_left</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">subdirectory_arrow_right</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">subject</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">subscriptions</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">subtitles</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">subway</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">supervisor_account</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">surround_sound</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">swap_calls</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">swap_horiz</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">swap_vert</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">swap_vertical_circle</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">switch_camera</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">switch_video</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">sync</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">sync_disabled</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">sync_problem</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">system_update</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">system_update_alt</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">tab</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">tab_unselected</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">tablet</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">tablet_android</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">tablet_mac</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">tag_faces</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">tap_and_play</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">terrain</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">text_fields</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">text_format</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">textsms</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">texture</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">theaters</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">thumb_down</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">thumb_up</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">thumbs_up_down</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">time_to_leave</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">timelapse</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">timeline</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">timer</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">timer_10</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">timer_3</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">timer_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">title</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">toc</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">today</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">toll</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">tonality</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">touch_app</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">toys</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">track_changes</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">traffic</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">train</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">tram</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">transfer_within_a_station</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">transform</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">translate</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">trending_down</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">trending_flat</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">trending_up</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">tune</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">turned_in</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">turned_in_not</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">tv</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">unarchive</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">undo</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">unfold_less</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">unfold_more</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">update</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">usb</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">verified_user</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">vertical_align_bottom</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">vertical_align_center</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">vertical_align_top</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">vibration</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">video_call</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">video_label</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">video_library</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">videocam</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">videocam_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">videogame_asset</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">view_agenda</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">view_array</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">view_carousel</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">view_column</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">view_comfy</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">view_compact</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">view_day</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">view_headline</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">view_list</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">view_module</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">view_quilt</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">view_stream</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">view_week</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">vignette</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">visibility</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">visibility_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">voice_chat</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">voicemail</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">volume_down</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">volume_mute</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">volume_off</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">volume_up</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">vpn_key</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">vpn_lock</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">wallpaper</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">warning</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">watch</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">watch_later</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">wb_auto</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">wb_cloudy</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">wb_incandescent</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">wb_iridescent</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">wb_sunny</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">wc</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">web</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">web_asset</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">weekend</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">whatshot</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">widgets</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">wifi</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">wifi_lock</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">wifi_tethering</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">work</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">wrap_text</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">youtube_searched_for</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">zoom_in</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">zoom_out</i>
          <i class="material-icons small teal-text" style="paddin: 1rem;">zoom_out_map</i>
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