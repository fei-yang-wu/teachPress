<?php
/**
 * Registers all default awards
 * @since 9.0.0
 */
function tp_register_all_awards() {
    // No Award
    tp_register_award(
        array(
            'award_slug'        => 'none',
            'i18n_singular'     => esc_html__('None','teachpress'),
            'i18n_plural'       => esc_html__('None','teachpress'),
            'icon'              => ''
        ) );
    
    // Best Paper
    tp_register_award(
        array(
            'award_slug'        => 'best',
            'i18n_singular'     => esc_html__('Best Paper','teachpress'),
            'i18n_plural'       => esc_html__('Best Papers','teachpress'),
            'icon'              => 'fas fa-trophy'
        ) );
    
    // Best Paper Finalist
    tp_register_award(
        array(
            'award_slug'        => 'finalist',
            'i18n_singular'     => esc_html__('Best Paper Finalist','teachpress'),
            'i18n_plural'       => esc_html__('Best Paper Finalists','teachpress'),
            'icon'              => 'fas fa-star'
        ) );
    
    // Honorable Mention
    tp_register_award(
        array(
            'award_slug'        => 'honorable',
            'i18n_singular'     => esc_html__('Honorable Mention','teachpress'),
            'i18n_plural'       => esc_html__('Honorable Mentions','teachpress'),
            'icon'              => 'fas fa-award'
        ) );

    // ICRA Best Paper Award Finalist
    tp_register_award(
        array(
            'award_slug'        => 'icra_best_paper_finalist',
            'i18n_singular'     => esc_html__('ICRA Best Paper Award Finalist','teachpress'),
            'i18n_plural'       => esc_html__('ICRA Best Paper Award Finalists','teachpress'),
            'icon'              => 'fas fa-star'
        ) );

    // IEEE-RAS TC on Whole-Body Control Best Paper Award Finalist
    tp_register_award(
        array(
            'award_slug'        => 'ieee_ras_tc_best_paper_finalist',
            'i18n_singular'     => esc_html__('IEEE-RAS TC on Whole-Body Control Best Paper Award Finalist','teachpress'),
            'i18n_plural'       => esc_html__('IEEE-RAS TC on Whole-Body Control Best Paper Award Finalists','teachpress'),
            'icon'              => 'fas fa-star'
        ) );

    // Best Late Breaking Results Poster Award
    tp_register_award(
        array(
            'award_slug'        => 'best_late_breaking_results_poster_award',
            'i18n_singular'     => esc_html__('Best Late Breaking Results Poster Award','teachpress'),
            'i18n_plural'       => esc_html__('Best Late Breaking Results Poster Awards','teachpress'),
            'icon'              => 'fas fa-trophy'
        ) );
}
