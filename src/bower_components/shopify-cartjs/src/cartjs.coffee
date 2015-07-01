# The CartJS namespace.
# ---------------------

CartJS =
  # Default settings, publicly accessible on `module.settings`.
  settings:
    debug: false
    dataAPI: true
    requestBodyClass: null
    rivetsModels: {}
    currency: null
    moneyFormat: null
    moneyWithCurrencyFormat: null


  # Our extended cart model.
  cart: new Cart()

# Initialisation method. Should be called at the bottom of the page template (usually at the bottom of theme.liquid),
# being passed a JSON representation of the current cart plus an option settings objects. For example:
#
#   <script type="text/javascript">
#     CartJS.init({{ cart | json }}, {
#       dataAPI: true
#     });
#   </script>
#
CartJS.init = (cart, settings = {}) ->
  # Configure settings from any passed settings hash.
  CartJS.configure(settings)

  # Note that we are initialising the library.
  CartJS.Utils.log('Initialising CartJS.')

  # Update the cart model with the initial cart objects.
  CartJS.cart.update(cart)

  # Initialise the Data API if enabled.
  if CartJS.settings.dataAPI
    CartJS.Utils.log('"dataAPI" setting is true, initialising Data API.')
    CartJS.Data.init()

  # Set up toggling of CSS class on body during requests if provided.
  if CartJS.settings.requestBodyClass
    CartJS.Utils.log('"requestBodyClass" set, adding event listeners.')
    $(document).on 'cart.requestStarted', () -> $('body').addClass(CartJS.settings.requestBodyClass)
    $(document).on 'cart.requestComplete', () -> $('body').removeClass(CartJS.settings.requestBodyClass)

  # Initialise DOM Binding through Rivets module.
  # Performs a no-op if Rivets.js isn't present.
  CartJS.Rivets.init()

# Configure CartJS with the given settings object.
CartJS.configure = (settings = {}) ->
  CartJS.Utils.extend(CartJS.settings, settings)
