jQuery(window).on('elementor:init', function() {
	console.log(":(")
	elementor.hooks.addAction('panel/open_editor/widget/product_placement', function(panel, model, view) {
		console.log("Happy")
		// Prevent reopening multiple times
		if (model.get('popupOpened')) {
			return;
		}

		model.set('popupOpened', true);

		var dialog = elementorCommon.dialogsManager.createWidget('myPopup', {
			headerMessage: 'Configure Widget',
			message: `
                <dialog style="padding:20px;" open>
                    <label>Enter Value</label>
                    <input type="text" id="my-popup-input" style="width:100%;" />
                </dialog>
            `,
			buttons: [
				{
					text: 'Save',
					className: 'elementor-button-success',
					callback: function() {

						var value = jQuery('#my-popup-input').val();

						// Save to hidden control
						model.setSetting('popup_data', value);

						this.hide();
					}
				}
			]
		});

		dialog.show();
	});

});
