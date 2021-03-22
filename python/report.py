class Problems(object):
    def __init__(self, numbers, summary):
        self.numbers = numbers
        self.summary = summary

    def a(self):
        for number in numbers:
            difference = self.summary - number
            if difference in numbers:
                return difference * number
        return None

    def b(self):
        for first_number in numbers:
            for second_number in numbers:
                difference = self.summary - (first_number + second_number)
                if difference in numbers:
                    return first_number * second_number * difference
        return None


with open('expense_report.txt', encoding='utf-8-sig') as f:
    numbers = [int(i) for i in f.read().split()]

problems = Problems(numbers, 2020)
print(problems.a())
print(problems.b())
