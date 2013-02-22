Petitions Thermometer module for Drupal
----------------------------
Add a petitions thermometer block to your Drupal 7 website.

The petitions thermometer lets you add a block to your Drupal website that displays
information about a single petition on the White House "We the People" petition
website.

To install this module, copy it into your sites/all/modules directory and
enable it using the "administer modules" interface on your Drupal website.

To specify which petition you want to display, go to the block configuration page
at admin/structure/block/manage/petitions_thermometer/thermometer/configure
and update the "Petition ID" autocomplete field.

NOTE: Currently this module only populates the autocomplete field with the
most recent 1,000 petitions at "We the People." Once the Petitions API
supports more options for filtering the list of petitions, this functionality
should be updated and made more configurable.