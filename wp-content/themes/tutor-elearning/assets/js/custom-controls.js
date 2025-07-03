(function(api) {

    api.sectionConstructor['tutor-elearning-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });

    const tutor_elearning_section_lists = ['banner', 'service'];
    tutor_elearning_section_lists.forEach(tutor_elearning_homepage_scroll);

    function tutor_elearning_homepage_scroll(item, index) {
        item = item.replace(/-/g, '_');
        wp.customize.section('tutor_elearning_' + item + '_section', function(section) {
            section.expanded.bind(function(isExpanding) {
                wp.customize.previewer.send(item, { expanded: isExpanding });
            });
        });
    }
})(wp.customize);