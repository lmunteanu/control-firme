<div>
   <a href="/firme.php"> &lt---Inapoi </a>
   <p>
      ID: <?=htmlspecialchars($TEMPLATE_VARS['firma']->id_firma)?>
      <a href="/firme.php?page=add_firma&id=<?=htmlspecialchars($TEMPLATE_VARS['firma']->id_firma)?>">
                  Edit
      </a>
   </p>
   <p>Numele firmei:
   <?=htmlspecialchars($TEMPLATE_VARS['firma']->denumire_unitate)?></p>
   <p>Adresa:
   <?=htmlspecialchars($TEMPLATE_VARS['firma']->adresa)?>
   <?=htmlspecialchars($TEMPLATE_VARS['firma']->nr_strada)?></p>
   <p>Telefon:
   <?=htmlspecialchars($TEMPLATE_VARS['firma']->telefon)?></p>
   <p>Persoana contact:
   <?=htmlspecialchars($TEMPLATE_VARS['firma']->persoana_contact)?></p>
   <p>Adresa punct lucru:
   <?=htmlspecialchars($TEMPLATE_VARS['firma']->adresa_pct_lucru)?></p>
   <p>CUI:
   <?=htmlspecialchars($TEMPLATE_VARS['firma']->cui)?></p>
   <p>Nr. Doc. de inregistrare:
   <?=htmlspecialchars($TEMPLATE_VARS['firma']->nr_doc_inregistrare)?></p>
   <p>CAEN:
   <?=htmlspecialchars($TEMPLATE_VARS['firma']->cod_caen)?></p>
   <p>Categorie:
   <?=htmlspecialchars($TEMPLATE_VARS['firma']->categorie)?></p>
   <p>Risc:
   <?=htmlspecialchars($TEMPLATE_VARS['firma']->risc_actual)?></p>
   <p>Ore control:
   <?=htmlspecialchars($TEMPLATE_VARS['firma']->ore_control)?></p>
   <p>Observatii:
   <?=htmlspecialchars($TEMPLATE_VARS['firma']->observatii)?></p>
   <p>Data start:
   <?=htmlspecialchars($TEMPLATE_VARS['firma']->data_start)?></p>
   <p>Data sfarsit:
   <?=htmlspecialchars($TEMPLATE_VARS['firma']->data_sfarsit)?></p>
   <p>Ultima modificare:
   <?=htmlspecialchars($TEMPLATE_VARS['firma']->data_update)?></p>
   
</div>