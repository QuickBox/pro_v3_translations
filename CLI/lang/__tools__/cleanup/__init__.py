#!/usr/bin/env python3
"""
CLI Translation Key Cleanup Package
===================================
Modular translation key cleanup tool for QuickBox CLI translations.
"""

__version__ = "2.0.0"
__author__ = "QuickBox Development Team"

from .cli_scanner import CLIScanner
from .usage_detector import UsageDetector
from .wsd_integration import WSDIntegration
from .report_generator import ReportGenerator
from .function_remover import FunctionRemover
from .bash_formatter import BashFormatter
from .cli_i18n_cleanup import CLITranslationCleanup

__all__ = [
    'CLIScanner',
    'UsageDetector',
    'WSDIntegration',
    'ReportGenerator',
    'FunctionRemover',
    'BashFormatter',
    'CLITranslationCleanup'
]
