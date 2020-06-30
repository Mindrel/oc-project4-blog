tinymce.init({
    selector: ".admin-textarea",
    language: "fr_FR",
    height: "360",
    branding: false,

    // Force l'encodage 
    entity_encoding: "raw",
    encoding: "UTF-8",

    // Paramétrage des boutons et barres de l'éditeur de texte
    menubar: "",
    toolbar: "undo redo | styleselect | bold italic underline | alignleft aligncenter alignright alignjustify | outdent indent | cut copy paste selectall",

    // Empêcher la création de paragraphes et remplacer par des sauts de lignes
    forced_root_block: '',
    force_br_newlines: true,
    force_p_newlines: false,
    plugins: "paste",
    paste_as_text: true
});