<?php

namespace Drupal\salesforce\Event;

/**
 * Interface for Salesforce Exception events, primarily for logging.
 */
interface SalesforceExceptionEventInterface {

  /**
   * Getter for exception.
   *
   * @return \Exception|null
   *   The exception or NULL if no exception was given.
   */
  public function getException();

  /**
   * Getter for log level.
   *
   * @return string
   *   Severity level for the event. Probably a Drupal\Core\Logger\RfcLogLevel
   *   or Psr\Log\LogLevel value.
   */
  public function getLevel();

  /**
   * Getter for message string.
   *
   * @return string
   *   The formatted message for this event. (Note: to get the Exception
   *   message, use ::getExceptionMessage()). If no message was given,
   *   FormattableMarkup will be an empty string.
   */
  public function getMessage();

  /**
   * Getter for message context.
   *
   * @return array
   *   The context aka args for this message, suitable for passing to ::log
   */
  public function getContext();

}
