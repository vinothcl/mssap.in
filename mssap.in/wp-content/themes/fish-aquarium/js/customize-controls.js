( function( api ) {

	// Extends our custom "fish-aquarium" section.
	api.sectionConstructor['fish-aquarium'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );