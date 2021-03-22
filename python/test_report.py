import pytest
from report import Problems


with open('expense_report.txt', encoding='utf-8-sig') as f:
    numbers = [int(i) for i in f.read().split()]

problems = Problems(numbers, 2020)

def test_problems():
    assert problems.a() == 876459
    assert problems.b() == 116168640
