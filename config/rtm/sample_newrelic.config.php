<?php
/**
 * This is a sample project-specific NewRelic dashboard.
 * It consists of a all available NewRelic widgets for a single application.
 * All you have to do is replace variables surronded with '%' char with your data.
 */
return array(
    'newRelic' => array(
        'headers' => array(
            'x-api-key' => '%X_API_KEY%',
        ),
        'params' => array(
            'accountId' => '%ACCOUNT_ID%',
            'appId' => '%APPLICATION_ID%',
        ),
    ),
    'widgets' => array(
        array('id' => 'messages',
            'type' => 'messages',
            'params' => array(
                'dao' => 'events',
                'metric' => 'messages',
                'span' => 6,
                'title' => 'Sample project',
                'limit' => 10,
            ),
        ),
        array('id' => '%WIDGET_ID_1%',
            'type' => 'graph',
            'params' => array(
                'dao' => 'newRelic',
                'metric' => 'feRpm',
                'span' => 3,
                'beginDateTime' => '-30 minutes',
                'endDateTime' => 'now',
                'title' => 'Frontend RPM',
            ),
        ),
        array('id' => '%WIDGET_ID_2%',
            'type' => 'graph',
            'params' => array(
                'dao' => 'newRelic',
                'metric' => 'rpm',
                'span' => 6,
                'beginDateTime' => '-30 minutes',
                'endDateTime' => 'now',
                'title' => 'Backend RPM',
            ),
        ),

        array('id' => '%WIDGET_ID_2%',
            'type' => 'graph',
            'params' => array(
                'dao' => 'newRelic',
                'metric' => 'cpuUsage',
                'title' => 'CPU USAGE',
                'valueSuffix' => '%',
                'span' => 6,
                'beginDateTime' => '-30 minutes',
                'endDateTime' => 'now',
            ),
        ),
        array('id' => '%WIDGET_ID_3%',
            'type' => 'graph',
            'params' => array(
                'dao' => 'newRelic',
                'metric' => 'averageResponseTime',
                'title' => 'Average response time',
                'span' => 6,
                'valueSuffix' => 'ms',
                'beginDateTime' => '-30 minutes',
                'endDateTime' => 'now',
            ),
        ),

        array('id' => '%WIDGET_ID_4%',
            'type' => 'number',
            'params' => array(
                'dao' => 'newRelic',
                'metric' => 'memory',
                'title' => 'MEMORY',
                'valueSuffix' => 'MB',
            ),
        ),
        array('id' => '%WIDGET_ID_5%',
            'type' => 'numberWithNewRelicThreshold',
            'params' => array(
                'dao' => 'newRelic',
                'metric' => 'apdex',
                'title' => 'Apdex',
                'thresholdComparator' => 'higherIsBetter',
            ),
        ),
        array('id' => '%WIDGET_ID_6%',
            'type' => 'error',
            'params' => array(
                'dao' => 'newRelic',
                'valueSuffix' => '%',
                'metric' => 'errorRate',
                'title' => 'ERROR RATE',
                'thresholdComparator' => 'lowerIsBetter',
            ),
        ),
    ),
);
