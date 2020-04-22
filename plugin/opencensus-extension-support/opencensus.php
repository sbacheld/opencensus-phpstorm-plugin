<?php

/**
 * Trace each invocation of the specified function
 *
 * @param  string $className
 * @param  string $methodName
 * @param  array|Closure $handler
 * @return bool
 */
function opencensus_trace_method($className, $methodName, $handler = []) { }

/**
 * Trace each invocation of the specified function
 *
 * @param  string $functionName
 * @param  array|callback $handler
 * @return bool
 */
function opencensus_trace_function($functionName, $handler = []) { }

/**
 * Start a trace span. The current trace span (if any) will be set as this span's parent.
 *
 * @return bool Returns true if the span has been created
 */
function opencensus_trace_begin($spanName, $spanOptions) { }

/**
 * Finish the current trace span. The previous trace span (if any) will be set as the current trace span.
 *
 * @return bool Returns true if the span has been finished
 */
function opencensus_trace_finish() { }

/**
 * Retrieve the list of collected trace spans
 *
 * @return OpenCensus\Trace\Ext\Span[]
 */
function opencensus_trace_list() { }

/**
 * Clear the list of collected trace spans
 *
 * @return bool
 */
function opencensus_trace_clear() { }

/**
 * Fetch the current trace context
 *
 * @return OpenCensus\Trace\Ext\SpanContext
 */
function opencensus_trace_context() { }

/**
 * Set the initial trace context
 *
 * @param string $traceId The trace id for this request. **Defaults to** a generated value.
 * @param string $parentSpanId [optional] The span id of this request's parent. **Defaults to** `null`.
 */
function opencensus_trace_set_context($traceId, $parentSpanId = null) { }

/**
 * Add an attribute to a span.
 *
 * @param string $key
 * @param string $value
 * @param array $options
 *
 *      @type int $spanId The id of the span to which to add the attribute.
 *            Defaults to the current span.
 */
function opencensus_trace_add_attribute($key, $value, $options = []) { }

/**
 * Add an annotation to a span
 * @param string $description
 * @param array $options
 *
 *      @type int $spanId The id of the span to which to add the attribute.
 *            Defaults to the current span.
 */
function opencensus_trace_add_annotation($description, $options = []) { }

/**
 * Add a link to a span
 * @param string $traceId
 * @param string $spanId
 * @param array $options
 *
 *      @type int $spanId The id of the span to which to add the link.
 *            Defaults to the current span.
 */
function opencensus_trace_add_link($traceId, $spanId, $options = []) { }

/**
 * Add a message to a span
 * @param string $type
 * @param string $id
 * @param array $options
 *
 *      @type int $spanId The id of the span to which to add the attribute.
 *            Defaults to the current span.
 */
function opencensus_trace_add_message_event($type, $id, $options = []) { }

/**
 * Return the current version of the opencensus_trace extension
 *
 * @return string
 */
function opencensus_trace_version() { }
