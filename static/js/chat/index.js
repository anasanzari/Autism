(function() {
	'use strict';

	angular.module('irontec.simpleChat', []);
	angular.module('irontec.simpleChat').directive('irontecSimpleChat', ['$timeout', SimpleChat]);

	function SimpleChat($timeout) {
		var directive = {
			restrict: 'EA',
			templateUrl: '../chat/chatLayout.html',
			replace: true,
			scope: {
				messages: '=',
				username: '=',
				myUserId: '=',
				inputPlaceholderText: '@',
				submitButtonText: '@',
				title: '@',
				theme: '@',
				submit: '&onSubmit',
				visible: '=',
				infiniteScroll: '&',
        expandOnNew: '='
			},
			link: link,
			controller: ChatCtrl,
			controllerAs: 'vm'
		};

		function link(scope, element) {
			if (!scope.inputPlaceholderText) {
				scope.inputPlaceholderText = 'Write your message here...';

			}

			if (!scope.submitButtonText || scope.submitButtonText === '') {
				scope.submitButtonText = 'Send';
			}

			if (!scope.title) {
				scope.title = 'Chat';
			}

			scope.$msgContainer = $('.msg-container-base'); // BS angular $el jQuery lite won't work for scrolling
			scope.$chatInput = $(element).find('.chat-input');

			var elWindow = scope.$msgContainer[0];
			/*scope.$msgContainer.bind('scroll', _.throttle(function() {
				var scrollHeight = elWindow.scrollHeight;
				if (elWindow.scrollTop <= 10) {
					scope.historyLoading = true; // disable jump to bottom
					scope.$apply(scope.infiniteScroll);
					$timeout(function() {
						scope.historyLoading = false;
						if (scrollHeight !== elWindow.scrollHeight) // don't scroll down if nothing new added
							scope.$msgContainer.scrollTop(360); // scroll down for loading 4 messages
					}, 150);
				}
			}, 300));*/
		}

		return directive;
	}

	ChatCtrl.$inject = ['$scope', '$timeout'];

	function ChatCtrl($scope, $timeout) {
		var vm = this;

    $scope.isHidden = false;
		$scope.messages = $scope.messages;
		$scope.username = $scope.username;
		$scope.myUserId = $scope.myUserId;
		$scope.inputPlaceholderText = $scope.inputPlaceholderText;
		$scope.submitButtonText = $scope.submitButtonText;
		$scope.title = $scope.title;
		$scope.theme = 'chat-th-' + $scope.theme;
		$scope.writingMessage = '';
		$scope.panelStyle = {'display': 'block'};
		$scope.chatButtonClass= 'fa-angle-double-down icon_minim';

		$scope.toggle = toggle;
		$scope.close = close;
		$scope.submitFunction = function(){
			//alert($scope.submit);
			$scope.submit()($scope.writingMessage, $scope.username);
			$scope.writingMessage = '';
			scrollToBottom();
		}

		$scope.$watch('visible', function() { // make sure scroll to bottom on visibility change w/ history items
			scrollToBottom();
			$timeout(function() {
				$scope.$chatInput.focus();
			}, 250);
		});
		$scope.$watch('messages.length', function() {
			if (!$scope.historyLoading) scrollToBottom(); // don't scrollToBottom if just loading history
            if ($scope.expandOnNew && vm.isHidden) {
                toggle();
            }
		});

		function scrollToBottom() {
			$timeout(function() { // use $timeout so it runs after digest so new height will be included
				$scope.$msgContainer.scrollTop($scope.$msgContainer[0].scrollHeight);
			}, 200, false);
		}

		function close() {
			$scope.visible = false;
		}

		function toggle() {
			if($scope.isHidden) {
				$scope.chatButtonClass = 'fa-angle-double-down icon_minim';
				$scope.panelStyle = {'display': 'block'};
				$scope.isHidden = false;
				scrollToBottom();
			} else {
				$scope.chatButtonClass = 'fa-expand icon_minim';
				$scope.panelStyle = {'display': 'none'};
				$scope.isHidden = true;
			}
		}
	}
})();
