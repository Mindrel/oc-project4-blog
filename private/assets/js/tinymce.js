tinymce.init({
    selector: ".admin-textarea",
    language: "fr_FR",
    height: "360",

    // Force l'encodage 
    entity_encoding: "raw",
    encoding: "UTF-8",

    // Paramétrage des boutons et barres du champ de saisie
    menubar: "",
    toolbar: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | outdent indent | cut copy paste selectall",

    // Empêcher la création de paragraphes et remplacer par des sauts de lignes
    forced_root_block: '',
    force_br_newlines: true,
    force_p_newlines: false
});